@extends('Backend.master')
@section('title','Khoa')
@section('main')
<div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">Danh Mục Khoa </h4>
                    <a href="{{asset('admin/cate/add')}}"><button type="button" class="btn btn-success"><i class="fas fa-plus"></i> Thêm Khoa</button></a>

                    <div class="container-fluid" style="margin-top: 20px;">
                        <div class="row">
                            <table class="table col-xl mr-xl-3">
                                <thead>
                                    <tr>
                                        <th scope="col">MSK</th>
                                        <th scope="col">Tên Khoa</th>
                                        <th scope="col">Trạng Thái</th>
                                        <th scope="col">Tùy Chọn</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @foreach($category as $cate)
                                    <tr class="table-primary">
                                        <td>{{$cate->cate_id}}</td>
                                        <th scope="row">{{$cate->cate_name}}</th>
                                        <td>
                                            @if($cate->cate_status==1)
                                                Mở cửa
                                            @endif
                                            @if($cate->cate_status==0)
                                                Đóng Cửa
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{asset('admin/cate/edit/'.$cate->cate_id)}}"><button type="button" class="btn btn-warning">Sửa</button></a>

                                            <a href="{{asset('admin/cate/del/'.$cate->cate_id)}}"><button type="button" class="btn btn-danger" onclick="return confirm('Bạn có chắc muốn xóa?')">Xóa</button></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- break -->
                           
                        </div>
                    </div>
</div>
@stop