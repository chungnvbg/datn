@extends('Backend.master')
@section('title','Sửa Khoa')
@section('main')
<div class="outer-w3-agile mt-3">
<h4 class="mb-3">Sửa Khoa</h4>
<form method="post">
     <div class="row">
        <div class="col-md-6 mb-3">
            <label for="cc-name">Tên Khoa</label>
            <input name="name" type="text" class="form-control" id="cc-name" value="{{$cate->cate_name}}" required="">                                   
        </div>
        <div class="col-md-6 mb-3" style="margin-top: 25px;">
            <input type="submit" class="btn btn-info" value="Thêm">
        </div>
     <div class="d-block my-3" style="margin-left: 20px;">
        <div class="custom-control custom-radio">
            <input id="credit" name="status" type="radio" class="custom-control-input" checked="" required="" value=1 @if($cate->cate_status==1) checked @endif>
            <label  class="custom-control-label" for="credit">Hoạt động</label>

            
        </div>

        <div class="custom-control custom-radio">
            <input id="debit" name="status" type="radio" class="custom-control-input" required="" value=0 @if($cate->cate_status==0) checked @endif>
            <label class="custom-control-label" for="debit">Không hoạt Động</label>
        </div>
    </div>
    </div>
    {{csrf_field()}}
</form>
@stop