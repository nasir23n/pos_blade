<?php

namespace App\Http\Controllers;

use App\Models\PaymentStatus;
use Illuminate\Http\Request;

class PaymentStatusController extends Controller
{
    public function index() {
        $payment_status = PaymentStatus::all();
        return view('backend.payment_status.index', compact('payment_status'));
    }

    public function create(Request $request) {
        if ($request->ajax()) {
            return view('backend.payment_status.form');
        }
    }
    public function edit(Request $request, PaymentStatus $payment_status) {
        if ($request->ajax()) {
            return view('backend.payment_status.form', compact('payment_status'));
        }
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|unique:payment_statuses,name',
        ]);

        PaymentStatus::create([
            'name' => $request->name,
        ]);
        return redirect()->route('admin.payment_status.index')->with('success', 'Payment Status Created Successfylly');
    }
    public function update(Request $request, PaymentStatus $payment_status) {
        $request->validate([
            'name' => 'required|unique:payment_statuses,name,'.$payment_status->id,
        ]);

        $payment_status->update([
            'name'      => $request->name,
        ]);
        return redirect()->route('admin.payment_status.index')->with('success', 'Payment Status Updated Successfylly');
    }
    public function delete(PaymentStatus $payment_status) {
        $payment_status->delete();
        return redirect()->route('admin.payment_status.index')->with('success', 'Payment Status Deleted Successfylly');
    }
}
