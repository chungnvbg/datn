<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Http\Requests\AddRoleRequest;
class RoleController extends Controller
{
    public function getRole(){
    	return view('backend.role');
    }
    public function getAddRole(){
    	return view('backend.addrole');
    } 
    public function postAddRole(AddRoleRequest $request){
    	$role= new Role();
    	$role->name=$request->name;
    	$role->save();
    	return redirect('admin/user/role');
    }
    public function getEditRole($id){
    	$data['role']= Role::find($id);
    	return view('backend.editrole',$data);
    }
    public function postEditRole(Request $request,$id){
    	$role= Role::find($id);
    	$role->name=$request->name;
    	$role->save();
    	return redirect('admin/user/role');
    }
    public function getDelRole($id){
        $data= Role::find($id);
        $data->delete();
        return redirect('admin/user/role');
    }
}
