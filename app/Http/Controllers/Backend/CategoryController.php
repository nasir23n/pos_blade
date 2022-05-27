<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::paginate(20);
        return view('backend.category.index', compact('categories'));
    }

    public function create(Request $request) {
        if ($request->ajax()) {
            return view('backend.category.form');
        }
    }
    public function edit(Request $request, Category $category) {
        if ($request->ajax()) {
            return view('backend.category.form', compact('category'));
        }
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|unique:categories,name',
            'details' => 'string|required'
        ]);

        Category::create([
            'name'      => $request->name, 
            'details'   => $request->details,
            'status'   => $request->status ? true : false,
        ]);
        return redirect()->route('admin.category.index')->with('success', 'Category Created Successfylly');
    }
    public function update(Request $request, Category $category) {
        $request->validate([
            'name' => 'required|unique:categories,name,'.$category->id,
            'details' => 'string|required'
        ]);

        $category->update([
            'name'      => $request->name, 
            'details'   => $request->details,
            'status'   => $request->status ? true : false,
        ]);
        return redirect()->route('admin.category.index')->with('success', 'Category Updated Successfylly');
    }
    public function delete(Category $category) {
        $category->delete();
        return redirect()->route('admin.category.index')->with('success', 'Category Deleted Successfylly');
    }
}
