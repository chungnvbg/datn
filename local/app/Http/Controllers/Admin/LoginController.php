<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\User;

class LoginController extends Controller
{
    //
    public function getLogin(){
    	return view('backend.login');
    }

    public function postLogin(Request $request)
    {
    	$arr = [
    		'email' => $request->email,
    		'password' => $request->password,
    	];

        if($request->remember == 'remember me'){
            $remember = true;
        }else{
            $remember = false;
        }

    	if(Auth::attempt($arr, $remember)){
    		return redirect('admin/home');
    	}else{
    		return back()->with('error', 'Tài khoản hoặc mật khẩu không hợp lệ');
    	}
    }
    public function getLogout(){
        Auth::logout();
        return redirect('login');
    }
    
}
