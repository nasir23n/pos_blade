<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        $suppliers = Supplier::paginate(20);
        return view('backend.supplier.index', compact('suppliers'));
    }

    public function create(Request $request) {
        if ($request->ajax()) {
            return view('backend.supplier.form');
        }
    }
    public function edit(Request $request, Supplier $supplier) {
        if ($request->ajax()) {
            return view('backend.supplier.form', compact('supplier'));
        }
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'email|nullable',
            'phone' => 'required',
            'address' => 'required|nullable',
        ]);

        Supplier::create([
            'name'      => $request->name, 
            'email'   => $request->email,
            'phone'   => $request->phone,
            'address'   => $request->address,
            'status'   => $request->status ? true : false,
        ]);
        return redirect()->route('admin.supplier.index')->with('success', 'Supplier Created Successfylly');
    }
    public function update(Request $request, Supplier $supplier) {
        $request->validate([
            'name' => 'required',
            'email' => 'email|nullable',
            'phone' => 'required',
            'address' => 'required|nullable',
        ]);

        // dd($request->status);
        $supplier->update([
            'name'      => $request->name, 
            'email'   => $request->email,
            'phone'   => $request->phone,
            'address'   => $request->address,
            'status'   => $request->status ? true : false,
        ]);
        // dd($supplier);
        return redirect()->route('admin.supplier.index')->with('success', 'Supplier Updated Successfylly');
    }
    public function delete(Supplier $supplier) {
        $supplier->delete();
        return redirect()->route('admin.supplier.index')->with('success', 'Supplier Deleted Successfylly');
    }
}
