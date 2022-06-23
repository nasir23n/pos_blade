<?php

namespace App\Http\Controllers\Backend\Report;

use App\Http\Controllers\Controller;
use App\Models\Purchase;
use App\Models\Supplier;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PurchaseReportController extends Controller
{
    public function index() {
        $this->data['purchases'] = Purchase::all();
        $this->data['suppliers'] = Supplier::all();
        return view('backend.repurt.purchase.purchase_report', $this->data);
    }

    public function filter(Request $request) {
        $purchase = Purchase::query();
        $end_date = ($request->end_date) ? Carbon::parse($request->end_date) : Carbon::now();
        if ($request->start_date) {
            $purchase->whereBetween('date', [Carbon::parse($request->start_date), $end_date]);
        }
        if ($request->supplier_id) {
            $purchase->where('supplier_id', $request->supplier_id);
        }

        $this->data['purchases'] = $purchase->get();
        return view('backend.repurt.purchase.purchase_filter', $this->data);
    }
}
