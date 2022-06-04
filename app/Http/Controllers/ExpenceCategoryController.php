<?php

namespace App\Http\Controllers;

use App\Models\ExpenceCategory;
use Illuminate\Http\Request;

class ExpenceCategoryController extends Controller
{
    public function index() {
        $expence_categories = ExpenceCategory::paginate(30);
        return view('backend.expence_category.index', compact('expence_categories'));
    }
    
    public function create(Request $request) {
        if ($request->ajax()) {
            return view('backend.expence_category.form');
        }
    }
    public function edit(Request $request, ExpenceCategory $expenceCategory) {
        if ($request->ajax()) {
            return view('backend.expence_category.form', compact('expenceCategory'));
        }
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|unique:expence_categories,name',
            'details' => 'string|required'
        ]);

        ExpenceCategory::create([
            'name'      => $request->name, 
            'details'   => $request->details,
        ]);
        return redirect()->route('admin.expence_category.index')->with('success', 'Unit Created Successfylly');
    }
    public function update(Request $request, ExpenceCategory $expenceCategory) {
        $request->validate([
            'name' => 'required|unique:expence_categories,name,'.$expenceCategory->id,
            'details' => 'string|required'
        ]);

        $expenceCategory->update([
            'name'      => $request->name, 
            'details'   => $request->details,
        ]);
        return redirect()->route('admin.expence_category.index')->with('success', 'Unit Updated Successfylly');
    }
    public function delete(ExpenceCategory $expenceCategory) {
        $expenceCategory->delete();
        return redirect()->route('admin.expence_category.index')->with('success', 'Unit Deleted Successfylly');
    }
}
