<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Category;
use DB;
class ServiceController extends Controller
{
    public function getService(){
        $data['service']=DB::table('service')->paginate(7);
        $data['category']=Category::all();
        return view('backend.service',$data);
    }
    public function getAddService(){
        return view('backend.addservice');
    }
    public function postAddService(Request $request){
        
    }
}
