<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $brands = Brand::all();
            return DataTables::of($brands)
                        ->addColumn('action', function ($brand) {
                            return '<button class="edit badge text-bg-yellow-500"><i class="fa fa-pen"></i></button>
                                    <button class="badge text-bg-red-500"><i class="fas fa-trash"></i></button>';
                        })
                        ->editColumn('created_at', function($brand) {
                            return date('Y-m-d H:s A' ,strtotime($brand->created_at));
                        })
                        ->editColumn('updated_at', function($brand) {
                            return date('Y-m-d H:s A' ,strtotime($brand->updated_at));
                        })
                        ->make(true);
        }
        return view('backend.brand.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if ($request->ajax()) {
            return view('backend.brand.form');
        }
        return view('backend.brand.create');
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
            'name' => 'required|unique:brands,name',
            'details' => 'string|required'
        ]);

        Brand::create([
            'name'      => $request->name,
            'slug'      => Str::slug($request->name),
            'details'   => $request->details,
        ]);
        return redirect()->route('admin.brands.index')->with('success', 'Brand Created Successfylly');
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
