@extends('Backend.master')
@section('title','Thêm Sản phẩm')
@section('main')
 <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">Thêm sản phẩm thuốc</h4>
                     @if(isset($errors))
                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger">{{$error}}</div>
                        @endforeach
                    @endif
                    <form method="post">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Tên sản phấm</label>
                                <input name="name" type="text" class="form-control" id="inputEmail4" placeholder="Tên Thuốc" required="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Xuất Sứ</label>
                                <input name="from" type="text" class="form-control" id="inputPassword4" placeholder="Xuất sứ" required="">
                            </div>
                        </div>
                       <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Nhà Phân Phối</label>
                                <input name="distrebution" type="text" class="form-control" id="inputEmail4" placeholder="Phân phối" required="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Hạn Sử Dụng</label>
                                <input name="warranty" type="text" class="form-control" id="inputPassword4" placeholder="Hạn sử dụng" required="">
                            </div>
                        </div>
                        <div class="form-row">
                            <div classs="form-group">
                                <label for="inputEmail4">Ảnh Sản Phẩm</label>
                                <input class="form-control" required="" type="file" name="img" onchange="changeImg(this)">
                            </div>
                           <div class="form-group" style="padding-left: 40px;">
                                    <label for="inputEmail4">Tình Trạng</label>
                                    <select name="status" class="form-control" id="exampleFormControlSelect1" required="">
                                        <option value="1">Còn Hàng</option>
                                        <option value="0">Hết Hàng</option>
                                    </select><br>
                                
                            </div>

                            <div class="form-group " style="padding-left: 40px;">
                                    <label for="inputEmail4">Danh mục</label>
                                    <select name="cate" class="form-control" id="exampleFormControlSelect1" required="">
                                    @foreach($catedrug as $cate)
                                        <option value="{{$cate->catedru_id}}">{{$cate->catedru_name}}</option>
                                     @endforeach
                                    </select><br>                                
                            </div>
                        </div>
                        <input name="submit" type="submit" class="btn btn-primary" value="Thêm">
                        {{csrf_field()}}
                    </form>
                </div>
@stop