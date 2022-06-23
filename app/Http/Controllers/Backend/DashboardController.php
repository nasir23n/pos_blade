<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Expence;
use App\Models\Product;
use App\Models\Sale;
use App\Models\Supplier;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $this->data['customers'] = Customer::count();
        $this->data['suppliers'] = Supplier::count();
        $this->data['products'] = Product::count();
        $this->data['sales'] = Sale::where('sales_status', 'Complete')->sum('total_price');
        $this->data['sales_due'] = Sale::where('sales_status')->sum('due_amount');
        $this->data['expense_amount'] = Expence::sum('amount');

        return view('backend.dashboard.dashboard', $this->data);
    }
}
