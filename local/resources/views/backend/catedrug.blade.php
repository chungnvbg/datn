@extends('Backend.master')
@section('title','Danh mục thuốc')
@section('main')
<div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">Danh Mục Thuốc</h4>
                    <a href="{{asset('admin/catedrug/add')}}"><button type="button" class="btn btn-info"><i class="fas fa-plus"></i> Thêm Danh Mục</button></a>

                    <div class="container-fluid" style="margin-top:20px;">
                        <div class="row">
                            <table class="table col-xl mr-xl-3">
                                <thead>
                                    <tr>
                                        <th scope="col">MT</th>
                                        <th scope="col">Tên Mục Thuốc</th>
                                        <th scope="col">Tình Trạng</th>
                                        <th scope="col">Tùy Chọn</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($catedrug as $cate)
                                    <tr class="table-success">
                                        <td>{{$cate->catedru_id}}</td>
                                        <th scope="row">{{$cate->catedru_name}}</th>
                                        <td>
                                            @if($cate->catedru_status==1)
                                                Còn hàng
                                            @endif

                                            @if($cate->catedru_status==0)
                                                Hết Hàng
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{asset('admin/catedrug/edit/'.$cate->catedru_id)}}"><button type="button" class="btn btn-warning"><i class="fas fa-pencil-alt">Sửa</i></button></a>

                                            <a href="{{asset('admin/catedrug/del/'.$cate->catedru_id)}}"><button type="button" class="btn btn-danger" onclick="return confirm('Bạn có chắc muốn xóa?')"><i class="fas fa-trash-alt">Xóa</i></button></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            
                        </div>
                    </div>
</div>
@stop