<?php
    
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use DB;
    
class RoleController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:role-list|role-create|role-edit|role-delete', ['only' => ['index','store']]);
         $this->middleware('permission:role-create', ['only' => ['create','store']]);
         $this->middleware('permission:role-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:role-delete', ['only' => ['destroy']]);
    }
    
    /**
    * Show all roles
    *
    * @return \Illuminate\Http\Response
    */
    public function index(Request $request)
    {
        $roles = Role::paginate(5);
        return view('admin.roles.index',compact('roles'));
    }
    
    /**
    * Create a new roles
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        $permission = Permission::get();
        return view('admin.roles.create',compact('permission'));
    }
    
    /**
    * Store new roles into database
    *
    * @param $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'name' => 'required|unique:roles,name',
            'permission' => 'required',
        ]);
    
        $role = Role::create(['name' => $request->input('name')]);
        $role->syncPermissions($request->input('permission'));

        // logging
        $role = new Role();
        activity()
            ->withProperties(['name' => $request->name])
            ->causedBy(auth()->user())
            ->performedOn($role)
           ->log('You have created roles');
    
        return redirect()->route('admin.roles')
                        ->with('success','Role created successfully');
    }
    
    /**
    * Edit a roles
    *
    * @param $id
    * @return \Illuminate\Http\Response
    */
    public function edit($id)
    {
        $role = Role::find($id);
        $permission = Permission::get();
        $rolePermissions = DB::table("role_has_permissions")
        	->where("role_has_permissions.role_id",$id)
            ->pluck('role_has_permissions.permission_id','role_has_permissions.permission_id')
            ->all();

    
        return view('admin.roles.edit',compact('role','permission','rolePermissions'));
    }
    
    /**
    * Update roles
    *
    * @param $request, $id
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'permission' => 'required',
        ]);
    
        $role = Role::find($id);
        $role->name = $request->input('name');
        $role->save();
    
        $role->syncPermissions($request->input('permission'));
    

        // logging
        $roles = new Role();
        activity()
            ->withProperties(['name' => $role->name])
            ->causedBy(auth()->user())
            ->performedOn($roles)
           ->log('You have edited roles');

        return redirect()->route('admin.roles')
                        ->with('success','Role updated successfully');
    }
    
    /**
    * Show all roles
    *
    * @param $id
    * @return \Illuminate\Http\Response
    */
    public function destroy($id)
    {
        $role = Role::find($id);
        $role_name = $role->name;

        $role->delete();

        // logging
        $role = new Role();
        activity()
            ->withProperties(['name' => $role_name])
            ->causedBy(auth()->user())
            ->performedOn($role)
           ->log('You have deleted roles');

        return redirect()->route('admin.roles')
                        ->with('success','Role deleted successfully');
    }
}