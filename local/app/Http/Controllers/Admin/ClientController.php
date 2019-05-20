<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Client;
use DB;
use Mail;
class ClientController extends Controller
{
   public function getClient(){
   		//$data['clients']= Client::all();
   		$data['clients']=DB::table('client')->paginate(7);
   		return view('backend.client',$data);
   }
   public function getDelClient($id){
   		$data=Client::find($id);
   		$data->delete();
   		return back();
   }
   public function getsend($id){
      $data['mail']=Client::find($id);
      return view('backend.sendmail',$data);
   }
   public function postsend(Request $request,$id){
         $data =[
            'email'=>$request->email,
            'name'=>$request->name,
            'date'=>$request->date,
         ];
         
         Mail::send('backend.mail',$data,function($message) use($data){
            $message->from('phucquangtk3@gmail.com','Phòng khám Ngô Chung');

            $message->to($data['email']);                          //Gửi email

            $message->cc('phucquangtk3@gmail.com','Quang');

            $message->subject('Lịch đến khám');
      });
      if (isset($data)) {
         echo "<script>alert('Gửi mail thành công !')</script>";
         return redirect('admin/client/send/'.$id);
      }
      else{
         echo "<script>alert('Lỗi chưa gửi được Email !')</script>";
      }
       
   }
}
