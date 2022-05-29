<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function index() {
        $units = Unit::paginate(30);
        return view('backend.unit.index', compact('units'));
    }
    
    public function create(Request $request) {
        if ($request->ajax()) {
            return view('backend.unit.form');
        }
    }
    public function edit(Request $request, Unit $unit) {
        if ($request->ajax()) {
            return view('backend.unit.form', compact('unit'));
        }
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|unique:units,name',
            'details' => 'string|required'
        ]);

        Unit::create([
            'name'      => $request->name, 
            'details'   => $request->details,
            'status'   => $request->status ? true : false,
        ]);
        return redirect()->route('admin.unit.index')->with('success', 'Unit Created Successfylly');
    }
    public function update(Request $request, Unit $unit) {
        $request->validate([
            'name' => 'required|unique:units,name,'.$unit->id,
            'details' => 'string|required'
        ]);

        $unit->update([
            'name'      => $request->name, 
            'details'   => $request->details,
            'status'   => $request->status ? true : false,
        ]);
        return redirect()->route('admin.unit.index')->with('success', 'Unit Updated Successfylly');
    }
    public function delete(Unit $unit) {
        $unit->delete();
        return redirect()->route('admin.unit.index')->with('success', 'Unit Deleted Successfylly');
    }
}
