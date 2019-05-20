@extends('Backend.master')
@section('title','Dịch Vụ')
@section('main')
<div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">Dịch Vụ</h4>
            <a href="{{asset('admin/service/add')}}"><button type="button" class="btn btn-success"><i class="fas fa-plus">Thêm dịch vụ</i></button></a>
                    <div class="container-fluid" style="margin-top:20px;">
                        <div class="row">
                            <table class="table col-xl mr-xl-3">
                                <thead>
                                    <tr>
                                        <th scope="col">Mã Số</th>
                                        <th scope="col">Tiêu đề</th>
                                        <th scope="col">Giá đã giảm</th>
                                        <th scope="col">Tên</th>
                                        <th scope="col">Khuyến mãi</th>
                                        <th scope="col">Ngày kết thúc</th>
                                        <th scope="col">Tình trạng</th>
                                        <th scope="col">Dịch vụ của khoa</th>
                                        <th scope="col">Tùy chọn</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @foreach($service as $ser)
                                    <tr class="table-warning">
                                        <td>{{$ser->ser_id}}</td>
                                        <td>{{$ser->ser_name}}</td>
                                        <td>{{number_format($ser->ser_price,0,',','.')}}.VNĐ</td>
                                        <td>{{$ser->ser_content}}</td>
                                        <td>{{$ser->ser_voucher}}</td>
                                        <td>{{$ser->ser_datetime}}</td>
                                        <td>
                                            @if($ser->ser_status==1)
                                                hoạt động
                                            @endif
                                            @if($ser->ser_status==0)
                                               không hoạt động
                                            @endif
                                        </td>
                                        <td>
                                            @foreach($category as $cate)
                                            @if($ser->cate_id==$cate->cate_id)
                                                {{$cate->cate_name}}
                                            @endif
                                            @endforeach
                                        </td>

                                        <td>
                                        <button type="button" class="btn btn-warning"><i class="fas fa-pen-square"></i></button>
                                        <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                    <div aria-label="Page navigation">
                        {{$service->links()}}
                    </div>
</div>
@stop