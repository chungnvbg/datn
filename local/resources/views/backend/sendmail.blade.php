@extends('Backend.master')
@section('title','Sửa khách hàng')
@section('main')
<div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">Nhắc lịch bệnh nhân</h4>
                    <form method="post">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Tên khách hàng</label>
                                <input type="text" name="name" class="form-control" id="inputEmail4" value="{{$mail->cli_name}}" required="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Xác nhận email khách hàng</label>
                                <input type="email" name="email" class="form-control" id="inputEmail4" value="{{$mail->cli_email}}" required="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Ngày hẹn</label>
                                <input type="date" name="date" class="form-control" id="inputEmail4" placeholder="dd/mm/yy" required="">
                            </div>                                                       
                        </div> 
                        <input type="submit" class="btn btn-primary" value="Gửi">
                        {{csrf_field()}}                       
                    </form>
</div>
@stop