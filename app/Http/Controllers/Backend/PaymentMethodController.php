<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\PaymentMethod;
use App\Traits\FileSaver;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentMethodController extends Controller
{
    use FileSaver;

    public function index() {
        $payment_methodes = PaymentMethod::all();
        return view('backend.payment_method.index', compact('payment_methodes'));
    }
    
    public function create(Request $request) {
        if ($request->ajax()) {
            return view('backend.payment_method.form');
        }
    }
    public function edit(Request $request, PaymentMethod $payment_method) {
        if ($request->ajax()) {
            return view('backend.payment_method.form', compact('payment_method'));
        }
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|unique:payment_methods,name',
        ]);

        DB::transaction(function() use($request) {
            if ($request->is_default == true && $request->status == true) {
                PaymentMethod::where('is_default', 1)->update([
                    'is_default' => 0,
                ]);
            }
            $payment_methode = PaymentMethod::create([
                'name'      => $request->name, 
                'is_default'   => ($request->is_default) ? true : false,
                'status'   => $request->status ? true : false,
            ]);
            if ($request->hasFile('image')) {
                $this->upload_file($request->image, $payment_methode, 'image', 'payment_method/');
            }
        });
        return redirect()->route('admin.payment_method.index')->with('success', 'Payment Method Created Successfylly');
    }
    public function update(Request $request, PaymentMethod $payment_method) {
        $request->validate([
            'name' => 'required|unique:payment_methods,name,'.$payment_method->id,
        ]);

        DB::transaction(function() use($request, $payment_method) {
            if ($request->is_default == true && $request->status == true) {
                PaymentMethod::where('is_default', 1)->update([
                    'is_default' => 0,
                ]);
            }
            $payment_method->update([
                'name'      => $request->name, 
                'is_default'   => ($request->is_default) ? true : false,
                'status'   => $request->status ? true : false,
            ]);
            $old_image = $payment_method->image;
            if ($request->hasFile('image')) {
                $this->upload_file($request->image, $payment_method, 'image', 'payment_method/');
                if (file_exists($old_image)) {
                    unlink($old_image);
                }
            } else {
                if ($request->remove_image) {
                    if (file_exists($old_image)) {
                        unlink($old_image);
                    }
                }
            }
        });

        return redirect()->route('admin.payment_method.index')->with('success', 'Payment Method Updated Successfylly');
    }
    public function delete(PaymentMethod $payment_method) {
        $payment_method->delete();
        return redirect()->route('admin.payment_method.index')->with('success', 'Payment Method Deleted Successfylly');
    }
}
