<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Drug;
use App\Models\Catedrug;
use App\Http\Requests\AddDrugRequest;
use DB;
class DrugController extends Controller
{
    public function getDrug(){
        // $data['drugs']= DB::table('drug')->join('category_drug','drug.catedrug_id','=','category_drug.catedrug_id')
        // ->orderBy('drug_id','desc')->get();
        $data['drugs']=Drug::paginate(1);
        $data['cate_drug']=Catedrug::all();
    	return view('backend.drug',$data);
    }
    public function getAddDrug(){
    	return view('backend.adddrug');
    }
    public function postAddDrug(AddDrugRequest $request){
    	$drug= new Drug;
    	$drug->drug_name=$request->name;
    	$drug->drug_from=$request->from;
    	$drug->drug_distrebution=$request->distrebution;
    	$drug->drug_warranty=$request->warranty;
    	$drug->drug_status=$request->status;
    	$drug->drug_image=$request->img;
    	$drug->catedrug_id=$request->cate;
    	$drug->save();
    	return redirect('admin/drug');
    }
    public function getEditDrug($id){
        $data['drug']=Drug::find($id);
        $data['catedrug']=Catedrug::all();
        return view('backend.editdrug',$data);
    }
    public function postEditDrug(Request $request,$id){
        $drug= new Drug;

        $arr['drug_name']=$request->name;
        $arr['drug_from']=$request->from;
        $arr['drug_distrebution']=$request->distrebution;
        $arr['drug_warranty']=$request->warranty;
        $arr['drug_status']=$request->status;
        $arr['catedrug_id']=$request->cate;

        if ($request->hasFile('img')) {
            $filename=$request->img->getClientOriginalName();
            $arr['drug_image']=$filename;
            $request->img->storeAs('avatar',$filename);
        }
        $drug::where('drug_id',$id)->update($arr);
        return redirect('admin/drug');
    }
    public function getlistdrug($id){
    	$data['catedrugs']=Catedrug::find($id);
    	$data['druglist']=Drug::where('catedrug_id',$id)->orderBy('catedrug_id','desc')->paginate(1);
    	return view('backend.listdrug',$data);
    }
    public function getDelDrug($id){
    	$data=Drug::find($id);
    	$data->delete();
    	return redirect('admin/drug');
    }
}
