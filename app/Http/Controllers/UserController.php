<?php
    
namespace App\Http\Controllers;
    
use Illuminate\Http\Request;
use App\Http\Requests\MemberRequest;
use App\Http\Controllers\Controller;
use App\Models\User;
use Spatie\Permission\Models\Role;
use DB;
use Hash;
use Illuminate\Support\Arr;
    
class UserController extends Controller
{
	function __construct()
    {
         $this->middleware('permission:member-list|member-create|member-edit|member-delete', ['only' => ['index','store']]);
         $this->middleware('permission:member-create', ['only' => ['create','store']]);
         $this->middleware('permission:member-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:member-delete', ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        $users = User::paginate(10);
        return view('admin.users.index',compact('users'));
    }
    
    public function create()
    {
        $roles = Role::pluck('name','name')->all();
        return view('admin.users.create',compact('roles'));
    }
    
    public function store(MemberRequest $request)
    {
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
    
        $user = User::create($input);
        $user->assignRole($request->input('roles'));
    
        return redirect()->back()
                        ->with('success','User created successfully');
    }
    
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();
    
        return view('admin.users.edit',compact('user','roles','userRole'));
    }
    
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'same:confirm-password',
            'roles' => 'required'
        ]);
    
        $input = $request->all();
        if(!empty($input['password'])){ 
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = Arr::except($input,array('password'));    
        }
    
        $user = User::find($id);
        $user->update($input);
        DB::table('model_has_roles')->where('model_id',$id)->delete();
    
        $user->assignRole($request->input('roles'));
    
        return redirect()->route('admin.member')
                        ->with('success','User updated successfully');
    }
    
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('admin.member')
                        ->with('success','User deleted successfully');
    }
}