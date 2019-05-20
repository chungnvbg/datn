<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\User;

class AdminController extends Controller
{
   public function getAdmin(){
 	return view('backend.index');
	}
	
}
