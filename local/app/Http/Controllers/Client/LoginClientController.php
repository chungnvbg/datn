<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Client;
use Auth;

class LoginClientController extends Controller
{
    public function getLogin() {
    	return view('client.login');
    }

    public function postLogin(Request $request) {
    	$arr = [
    		'email' => $request->email,
    		'password' => $request->password,
    	];

    	if(Auth::attempt($arr)){
    		return redirect('client');
    	}else{
    		return back()->with('error', 'Tài khoản hoặc mật khẩu không hợp lệ');
    	}
    }
}
