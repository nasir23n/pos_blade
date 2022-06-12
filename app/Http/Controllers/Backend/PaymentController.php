<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\PaymentMethod;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index() {
        $payment_methods = PaymentMethod::all();
        return view('backend.payment.payment', compact('payment_methods'));
    }

    public function store(Request $request) {
        return $request->all();
    }
}
