<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Catedrug;
use App\Http\Requests\Addcatedrug;
class CatedrugController extends Controller
{
    public function getCateDrug(){
    	return view('backend.catedrug');
    }
    public function getAddCateDrug(){
    	return view('backend.addcatedrug');
    }
    public function postAddCateDrug(Addcatedrug $request){
    	$catedrug= new Catedrug;
    	$catedrug->catedru_name=$request->name;
    	$catedrug->catedru_status=$request->status;
    	$catedrug->catedru_parent=0;
    	$catedrug->save();
    	return redirect('admin/catedrug');
    }
    public function getEditCateDrug($id){
    	$data['catedrugs']= Catedrug::find($id);
    	return view('backend.editcatedrug',$data);
    }
    public function postEditCateDrug(Request $request,$id){
    	$catedrug= Catedrug::find($id);
    	$catedrug->catedru_name=$request->name;
    	$catedrug->catedru_status=$request->status;
    	$catedrug->catedru_parent=0;
    	$catedrug->save();
    	return redirect('admin/catedrug');
    }
    public function getDelCateDrug($id){
        $data= Catedrug::find($id);
        $data->delete();
        return redirect('admin/catedrug');
    }
}
