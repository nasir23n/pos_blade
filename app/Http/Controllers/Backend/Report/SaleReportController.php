<?php

namespace App\Http\Controllers\Backend\Report;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Sale;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SaleReportController extends Controller
{
    public function index() {
        $this->data['sales'] = Sale::all();
        $this->data['customers'] = Customer::all();
        return view('backend.repurt.sale.sale_report', $this->data);
    }

    public function filter(Request $request) {
        $sale = Sale::query();
        $end_date = ($request->end_date) ? Carbon::parse($request->end_date) : Carbon::now();
        if ($request->start_date) {
            $sale->whereBetween('date', [Carbon::parse($request->start_date), $end_date]);
        }
        if ($request->supplier_id) {
            $sale->where('supplier_id', $request->supplier_id);
        }

        $this->data['sales'] = $sale->get();
        return view('backend.repurt.sale.sale_filter', $this->data);
    }
}
