@extends('Backend.master')
@section('title','Sửa Thông Tin Nhân Viên')
@section('main')
<div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">Sửa thông tin nhân viên</h4>
                    <form method="post" role="form">
                        <div class="form-row">
                             <div class="form-group col-md-6">
                                <label for="inputPassword4">Họ Và Tên</label>
                                <input name="name" type="text" class="form-control" id="inputPassword4" value="{{$user->name}}" required="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Email</label>
                                <input name="mail" type="email" class="form-control" id="inputEmail4" value="{{$user->email}}" required="">
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Tuổi</label>
                                <input name="age" type="text" class="form-control" id="inputEmail4" value="{{$user->age}}" required="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Số điện thoại</label>
                                <input name="phone" type="text" class="form-control" id="inputEmail4" value="{{$user->phone}}" required="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Địa Chỉ</label>
                                <input name="address" type="text" class="form-control" id="inputEmail4" value="{{$user->address}}" required="">
                            </div><br>
                            <div class="form-group">
                                <label for="inputEmail4">Giới Tính</label>
                                <select name="sex" class="form-control" id="exampleFormControlSelect1" required="">
                                    <option>{{$user->sex}}</option><br>
                                    <option>Nữ</option>
                                    <option>Nam</option> 
                                </select>
                                
                            </div><br>
                            
                            <div class="form-group" style="padding: 0 20px;">
                                    <label for="inputEmail4">Vị Trí</label>
                                    <select name="level" class="form-control" id="exampleFormControlSelect1" required="">
                                       @foreach($roles as $role)
                                        <option value="{{$role->id}}" @if($user->level==$role->id) selected @endif>{{$role->name}}
                                        </option>
                                       @endforeach 
                                    </select>
                            </div><br>

                            <div class="form-group">
                                    <label for="inputEmail4">Khoa</label>
                                    <select name="cate" class="form-control" id="exampleFormControlSelect1" required="">
                                       @foreach($category as $cate)
                                        <option value="{{$cate->cate_id}}"@if($user->cate_id==$cate->cate_id) selected @endif>{{$cate->cate_name}}
                                        </option>
                                       @endforeach 
                                    </select>
                            </div><br>

                            <div classs="form-group">
                                <label for="inputEmail4">Ảnh Đại Diện</label>
                                <input id="img" class="form-control" required="" type="file" name="img" onchange="changeImg(this)" value="{{$user->avatar}}" src="{{asset('lib/storage/app/avatar/'.$user->avatar)}}">
                            </div>
                        </div>                    
                      <input type="submit" class="btn btn-primary btn-lg btn-block error-w3l-btn" name="submit" value="Sửa Nhân Viên">
                      {{csrf_field()}}
                    </form>
                </div>
@stop