<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Models\Client;

class ClientController extends Controller
{
    public function getClient() {
    	return view('client.index2');
    }

    public function getLogout() {
    	Auth::logout();
    	return redirect('loginClient');
    }

    public function getRegister() {
    	return view('client.register');
    }
}
