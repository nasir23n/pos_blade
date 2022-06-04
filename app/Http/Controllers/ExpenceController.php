<?php

namespace App\Http\Controllers;

use App\Models\Expence;
use App\Models\ExpenceCategory;
use Illuminate\Http\Request;

class ExpenceController extends Controller
{
    public function index() {
        $expence = Expence::paginate(30);
        return view('backend.expence.index', compact('expence'));
    }
    
    public function create(Request $request) {
        if ($request->ajax()) {
            $expence_categories = ExpenceCategory::all();
            return view('backend.expence.form', compact('expence_categories'));
        }
    }
    public function edit(Request $request, Expence $expence) {
        if ($request->ajax()) {
            $expence_categories = ExpenceCategory::all();
            return view('backend.expence.form', compact('expence', 'expence_categories'));
        }
    }

    public function store(Request $request) {
        $request->validate([
            'date' => 'required',
            'expence_category_id' => 'required',
            'amount' => 'required',
            // 'note' => '',
        ]);

        Expence::create([
            'date' => $request->date,
            'expence_category_id' => $request->expence_category_id,
            'amount' => $request->amount,
            'note' => $request->note,
            'created_by' => auth()->user()->id
        ]);
        return redirect()->route('admin.expence.index')->with('success', 'Expence Created Successfylly');
    }
    public function update(Request $request, Expence $expence) {
        $request->validate([
            'date' => 'required',
            'expence_category_id' => 'required',
            'amount' => 'required',
            // 'note' => '',
        ]);

        $expence->update([
            'date' => $request->date,
            'expence_category_id' => $request->expence_category_id,
            'amount' => $request->amount,
            'note' => $request->note,
        ]);
        return redirect()->route('admin.expence.index')->with('success', 'Expence Updated Successfylly');
    }
    public function delete(Expence $expence) {
        $expence->delete();
        return redirect()->route('admin.expence.index')->with('success', 'Expence Deleted Successfylly');
    }
}
