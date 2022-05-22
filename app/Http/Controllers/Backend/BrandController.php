<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


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
            // $draw 				= 		$request->get('draw'); // Internal use
            // $start 				= 		$request->get("start"); // where to start next records for pagination
            // $rowPerPage 		= 		$request->get("length"); // How many recods needed per page for pagination
         
            // $orderArray 	    = 		$request->get('order');
            // $columnNameArray 	= 		$request->get('columns'); // It will give us columns array
                              
            // $searchArray 		= 		$request->get('search');
            // $columnIndex 		= 		$orderArray[0]['column'];  // This will let us know,
            //                                                    // which column index should be sorted 
            //                                                    // 0 = id, 1 = name, 2 = email , 3 = created_at
         
            // $columnName 		= 		$columnNameArray[$columnIndex]['data']; // Here we will get column name, 
            //                                                                // Base on the index we get
         
            // $columnSortOrder 	= 		$orderArray[0]['dir']; // This will get us order direction(ASC/DESC)
            // $searchValue 		= 		$searchArray['value']; // This is search value 
         
            // $brands = DB::table('brands');
            // $total = $brands->count();

            // $totalFilter = DB::table('brands');

            // $totalFilter = $totalFilter->count();


            // $arrData = DB::table('brands');
            // $arrData = $arrData->skip($start)->take($rowPerPage);
            // $arrData = $arrData->orderBy($columnName,$columnSortOrder);

            // if (!empty($searchValue)) {
            //     $arrData = $arrData->where('name','like','%'.$searchValue.'%');
            //     $arrData = $arrData->orWhere('details','like','%'.$searchValue.'%');
            // }

            // $arrData = $arrData->get();
            // $response = array(
            //     "draw" => intval($draw),
            //     "recordsTotal" => $total,
            //     "recordsFiltered" => $totalFilter,
            //     "data" => $arrData,
            // );
            return datatables()->eloquent(Brand::query())->toJson();
            // return response()->json($response);
        }
        return view('backend.brand.index');
    }
    // public function index(Request $request)
    // {
    //     if ($request->ajax()) {
    //         $draw 				= 		$request->get('draw'); // Internal use
    //         $start 				= 		$request->get("start"); // where to start next records for pagination
    //         $rowPerPage 		= 		$request->get("length"); // How many recods needed per page for pagination
         
    //         $orderArray 	    = 		$request->get('order');
    //         $columnNameArray 	= 		$request->get('columns'); // It will give us columns array
                              
    //         $searchArray 		= 		$request->get('search');
    //         $columnIndex 		= 		$orderArray[0]['column'];  // This will let us know,
    //                                                            // which column index should be sorted 
    //                                                            // 0 = id, 1 = name, 2 = email , 3 = created_at
         
    //         $columnName 		= 		$columnNameArray[$columnIndex]['data']; // Here we will get column name, 
    //                                                                        // Base on the index we get
         
    //         $columnSortOrder 	= 		$orderArray[0]['dir']; // This will get us order direction(ASC/DESC)
    //         $searchValue 		= 		$searchArray['value']; // This is search value 
         
    //         $brands = DB::table('brands');
    //         $total = $brands->count();

    //         $totalFilter = DB::table('brands');

    //         $totalFilter = $totalFilter->count();


    //         $arrData = DB::table('brands');
    //         $arrData = $arrData->skip($start)->take($rowPerPage);
    //         $arrData = $arrData->orderBy($columnName,$columnSortOrder);

    //         if (!empty($searchValue)) {
    //             $arrData = $arrData->where('name','like','%'.$searchValue.'%');
    //             $arrData = $arrData->orWhere('details','like','%'.$searchValue.'%');
    //         }

    //         $arrData = $arrData->get();
    //         $response = array(
    //             "draw" => intval($draw),
    //             "recordsTotal" => $total,
    //             "recordsFiltered" => $totalFilter,
    //             "data" => $arrData,
    //         );
    //         // return datatables()->eloquent(Brand::query())->toJson();
    //         return response()->json($response);
    //     }
    //     return view('backend.brand.index');
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        return redirect()->route('brands.index')->with('success', 'Brand Created Successfylly');
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
