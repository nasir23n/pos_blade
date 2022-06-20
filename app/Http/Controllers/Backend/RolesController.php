<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Module;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Str;

class RolesController extends Controller
{
    public function index() {
        Gate::authorize('admin.roles');
        $roles = Role::where('slug', '!=', 'super-admin')->orderBy('created_at', 'DESC')->get();
        return view('backend.roles.index', compact('roles'));
    }

    public function create() {
        // Gate::authorize('admin.roles');
        $modules = Module::all();
        $isSuper = Auth::user()->role->slug == 'super-admin';
        return view('backend.roles.create', ['modules' => $modules, 'isSuper' => $isSuper]);
    }

    public function create_permission(Request $request) {
        // Gate::authorize('admin.roles');
        $request->validate([
            'module' => 'required',
            'name' => 'required',
            'slug' => 'required|unique:permissions,slug',
        ]);
        $module = Module::find($request->module);
        Permission::updateOrCreate([
            'module_id' =>  $module->id,
            'name'      => $request->name,
            'slug'      => $request->slug
        ]);
        return back()->with('success', 'Permission Create Successfully');
    }
    public function create_module(Request $request) {
        // Gate::authorize('admin.roles');
        $request->validate([
            'name' => 'required|unique:modules,name'
        ]);
        Module::updateOrCreate(['name'=> $request->name]);
        return back()->with('success', 'Module Create Successfully');
    }

    public function store(Request $request) {
        // Gate::authorize('admin.roles');
        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:roles,slug',
            'permissions' => 'required',
        ]);

        Role::create([
            'name' => $request->name,
            'note' => $request->note,
            'slug' => Str::slug($request->name),
        ])->permissions()->sync($request->input('permissions'),[]);;

        //notification
        $notification = array(
            'message' =>'Roles Create Successfully ',
            'alert-type' =>'success'
        );
        return back()->with($notification);
    }
    public function edit(Role $role) {
        $modules = Module::all();
        $isSuper = Auth::user()->role->slug == 'super-admin';
        return view('backend.roles.create', ['role' => $role, 'modules' => $modules, 'isSuper' => $isSuper]);
    }

    public function update(Request $request, Role $role) {
        // Gate::authorize('admin.roles');
        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:roles,slug,'.$role->id,
            'permissions' => 'required',
        ]);

        // dd($role);
        $role->update([
            'name' => $request->name,
            'note' => $request->note,
            'slug' => Str::slug($request->name),
        ]);
        
        $role->permissions()->sync($request->input('permissions'));

        //notification
        $notification = array(
            'message' =>'Roles Updated Successfully ',
            'alert-type' =>'success'
        );
        return back()->with($notification);
    }

    public function delete(Request $request, Role $role) {
        // Gate::authorize('admin.roles');
        if ($role->deleteable) {
            $role->delete();
            //notification
            $notification = array(
                'message' =>'Roles Deleted Successfully ',
                'alert-type' =>'success'
            );
            return back()->with($notification);
        }

        //notification
        $notification = array(
            'message' =>'Roles Is Not Deleteable',
            'alert-type' =>'error'
        );
        return back()->with($notification);
    }
}
