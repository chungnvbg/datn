<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use DB;
use App\Http\Requests\AddCateRequest;
class CategoryController extends Controller
{
    public function getCate(){
    	$data['category']=DB::table('categorys')->get();
    	return view('backend.category',$data);
    }

    public function getAddCate(){
    	return view('backend.addcate');
    }
    public function postAddCate(AddCateRequest $request){
    	$category= new Category;
    	$category->cate_name=$request->name;
    	$category->cate_status=$request->status;
    	$category->cate_parent=0;
    	$category->save();
    	return redirect('admin/cate');
    }
    public function getEditCate($id){
    	$data['cate']= Category::find($id);
    	return view('backend.editcate',$data);
    }
    public function postEditCate(Request $request,$id){
    	$category= Category::find($id);
    	$category->cate_name=$request->name;
    	$category->cate_status=$request->status;
    	$category->cate_parent=0;
    	$category->save();
    	return redirect('admin/cate');
    }
    public function getDelCate($id){
    	$data= Category::find($id);
    	$data->delete();
    	return back();
    }
}
