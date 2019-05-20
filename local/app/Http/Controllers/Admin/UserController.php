<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Category;
use App\Models\Role;
use DB;
use App\Http\Requests\AddUserRequest;
class UserController extends Controller
{
   //nhan vien
	public function getUser(){
		$data['users']= User::all();
		$data['roles']=Role::all();
		return view('backend.user',$data);
	}
	//them nhan vien
	public function getAddUser(){
		$data['category']=DB::table('categorys')->get();
		return view('backend.adduser',$data);
	}
	public function postAddUser(AddUserRequest $request){		
		
		//$filename = $request->img->getClientOriginalName();

		$user = new User;
		$user->name=$request->name;
		$user->email=$request->mail;
		$user->password=bcrypt($request->pass);
		$user->age=$request->age;
		$user->phone=$request->phone;
		$user->address=$request->address;
		$user->sex=$request->sex;
		$user->avatar=$request->img;
		$user->level=$request->level;
		$user->cate_id=$request->cate;
		$user->save();
		// $request->img->storeAs('avatar',$filename);
		return redirect('admin/user');

	}
	public function getEditUser($id){
		$data['user']=User::find($id);
		$data['category']=Category::all();
		return view('backend.edituser',$data);
	}
	public function postEditUser(Request $request,$id){
		$user= new User;

		$arr['name']=$request->name;
		$arr['email']=$request->mail;
		$arr['age']=$request->age;
		$arr['phone']=$request->phone;
		$arr['address']=$request->address;
		$arr['sex']=$request->sex;
		$arr['level']=$request->level;
		$arr['cate_id']=$request->cate;

		
		if ($request->hasFile('img')) {
			$filename=$request->img->getClientOriginalName();
			$arr['avatar']=$filename;
			$request->img->storeAs('avatar',$filename);
		}
		$user::where('id',$id)->update($arr);
		return redirect ('admin/user');
	}
	public function getlistuser($id){
		$data['role']= Role::find($id);
		$data['userlist']=User::where('level',$id)->orderBy('id','desc')->get();
		return view('backend.listuser',$data);
	}

	public function getDelUser($id){
		$data= User::find($id);
		$data->delete();
		return redirect('admin/user');
	}
}
