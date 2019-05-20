@extends('Backend.master')
@section('title','Sửa Sản Phẩm Thuốc')
@section('main')
<div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">Sửa Sản Phẩm</h4>
                   <form method="post">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Tên sản phấm</label>
                                <input name="name" type="text" class="form-control" id="inputEmail4" value="{{$drug->drug_name}}" required="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Xuất Sứ</label>
                                <input name="from" type="text" class="form-control" id="inputPassword4" value="{{$drug->drug_from}}" required="">
                            </div>
                        </div>
                       <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Nhà Phân Phối</label>
                                <input name="distrebution" type="text" class="form-control" id="inputEmail4" value="{{$drug->drug_distrebution}}" required="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Hạn Sử Dụng</label>
                                <input name="warranty" type="text" class="form-control" id="inputPassword4" value="{{$drug->drug_warranty}}" required="">
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
                                        <option value="1" @if($drug->drug_status==1) selected @endif>Còn Hàng</option>

                                        <option value="0" @if($drug->drug_status==0) selected @endif>Hết hàng</option>
                                        
                                    </select><br>
                                
                            </div>

                            <div class="form-group" style="padding-left: 40px;">
                                    <label for="inputEmail4">Danh mục</label>
                                    <select name="cate" class="form-control" id="exampleFormControlSelect1" required="">
                                    @foreach($catedrug as $cate)
                                    <option value="{{$cate->catedru_id}}" @if($drug->catedrug_id==$cate->catedru_id) selected @endif>{{$cate->catedru_name}}</option> 
                                    @endforeach                             
                            </div>
                       </div>
                        
                        <input type="submit" class="btn btn-primary btn-lg btn-block error-w3l-btn" name="submit" value="Bắt Đầu Sửa">
                        {{csrf_field()}}
                    </form>
</div>
@stop