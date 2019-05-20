@extends('Backend.master')
@section('title','Sửa dịch vụ')
@section('main')
<div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">Sửa dịch vụ</h4>
                    <form method="post">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Tiêu đề</label>
                                <input type="text" class="form-control" id="inputEmail4" placeholder="name" required="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Giá</label>
                                <input type="text" class="form-control" id="inputPassword4" placeholder="price" required="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputAddress">Tên</label>
                                <input type="content" class="form-control" id="inputAddress" placeholder="1234 Main St" required="">
                            </div>
                            <div class="form-group col-md-6">
                                 <label for="inputAddress2">Khuyến mãi</label>
                                 <input type="text" class="form-control" id="inputAddress2" placeholder="" required="">
                            </div>
                            <div class="form-group col-md-6">
                                 <label for="inputAddress2">Ngày hết</label>
                                 <input type="text" class="form-control" id="inputAddress2" placeholder="" required="">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputState">Tình trạng</label>
                                <select id="inputState" class="form-control">
                                    <option selected="">Hoạt động</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputState">Khoa</label>
                                <select id="inputState" class="form-control">
                                    <option selected="">Choose...</option>
                                    <option>...</option>
                                </select>
                            </div>
                        </div>                                                                        
                        <button type="submit" class="btn btn-primary">Thêm</button>
                    </form>
</div>
@stop