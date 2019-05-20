@extends('Backend.master')
@section('title','Thêm Nhân Viên')
@section('main')
<div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">Thêm Nhân Viên</h4>
                    @if(isset($errors))
                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger">{{$error}}</div>
                        @endforeach
                    @endif
                    <form method="post" role="form">
                        <div class="form-row">
                             <div class="form-group col-md-6">
                                <label for="inputPassword4">Họ Và Tên</label>
                                <input name="name" type="text" class="form-control" id="inputPassword4" placeholder="Họ Và Tên" required="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Email</label>
                                <input name="mail" type="email" class="form-control" id="inputEmail4" placeholder="Email" required="" value="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Password</label>
                                <input name="pass" type="password" class="form-control" id="inputPassword4" placeholder="Password" value="" required="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Tuổi</label>
                                <input name="age" type="text" class="form-control" id="inputEmail4" placeholder="Tuổi" value="" required="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Số điện thoại</label>
                                <input name="phone" type="text" class="form-control" id="inputEmail4" placeholder="Phone" value="" required="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Địa Chỉ</label>
                                <input name="address" type="text" class="form-control" id="inputEmail4" placeholder="Address" value="" required="">
                            </div>
                            <div class="form-group">
                                    <label for="inputEmail4">Giới Tính</label>
                                    <select name="sex" class="form-control" id="exampleFormControlSelect1" required="">
                                        <option>Nam</option>
                                        <option>Nữ</option>
                                    </select><br>
                                
                            </div>
                            
                            <div class="form-group">
                                    <label for="inputEmail4">Vị Trí</label>
                                    <select name="level" class="form-control" id="exampleFormControlSelect1" required="">
                                        @foreach($roles as $role)
                                        <option value="{{$role->id}}">{{$role->name}}</option>
                                        @endforeach
                                    </select>
                            </div>

                            <div class="form-group">
                                    <label for="inputEmail4">Khoa</label>
                                    <select name="cate" class="form-control" id="exampleFormControlSelect1" required="">
                                        @foreach($category as $cate)
                                        <option value="{{$cate->cate_id}}">{{$cate->cate_name}}</option>
                                        @endforeach
                                    </select>
                            </div><br>

                            <div classs="form-group">
                                <label for="inputEmail4">Ảnh Đại Diện</label>
                                <input class="form-control" required="" type="file" name="img" onchange="changeImg(this)">
                            </div>
                        </div>                    
                      <input type="submit" class="btn btn-primary btn-lg btn-block error-w3l-btn" name="submit" value="Thêm mới Nhân Viên">
                      {{csrf_field()}}
                    </form>
                </div>
@stop