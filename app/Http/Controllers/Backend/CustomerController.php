<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::paginate(20);
        return view('backend.customer.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if ($request->ajax()) {
            return view('backend.customer.form');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'email|nullable',
            'phone' => 'required',
            'address' => 'required|nullable',
        ]);

        Customer::create([
            'name'      => $request->name, 
            'email'   => $request->email,
            'phone'   => $request->phone,
            'address'   => $request->address,
            'status'   => $request->status ? true : false,
        ]);
        return redirect()->route('admin.customer.index')->with('success', 'Customer Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,Customer $customer)
    {
        if ($request->ajax()) {
            return view('backend.customer.form', compact('customer'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Customer $customer)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'email|nullable',
            'phone' => 'required',
            'address' => 'required|nullable',
        ]);

        // dd($request->status);
        $customer->update([
            'name'      => $request->name, 
            'email'   => $request->email,
            'phone'   => $request->phone,
            'address'   => $request->address,
            'status'   => $request->status ? true : false,
        ]);
        // dd($supplier);
        return redirect()->route('admin.customer.index')->with('success', 'Customer Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Customer $customer)
    {
        $customer->delete();
        return redirect()->route('admin.customer.index')->with('success', 'Customer Deleted Successfully');
    }
}
