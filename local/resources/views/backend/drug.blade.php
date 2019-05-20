@extends('Backend.master')
@section('title','Thuốc')
@section('main')
<div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">Tất Cả Các Sản Phẩm Thuốc</h4>
                    <a href="{{asset('admin/drug/add')}}"><button style="margin-bottom: 10px;" type="button" class="btn btn-primary"><i class="fas fa-plus"></i> Thêm Sản Phẩm</button></a>
                    <div class="container-fluid">
                        <div class="row">
                            <table class="table col-xl mr-xl-3">
                                <thead>
                                    <tr>
                                        <th scope="col">MSP</th>
                                        <th scope="col">Tên Sản Phẩm</th>
                                        <th scope="col">Ảnh Sản Phẩm</th>
                                        <th scope="col">Xuất Sứ</th>
                                        <th scope="col">Nhà Phân Phối</th>
                                        <th scope="col">Hạn Sử Dụng</th>
                                        <th scope="col">Trạng Thái</th>
                                        <th scope="col">Loại Thuốc</th>
                                        <th scope="col">Tùy Chọn</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($drugs as $drug)
                                    <tr class="table-warning">
                                        <td>{{$drug->drug_id}}</td>
                                        <th scope="row">{{$drug->drug_name}}</th>
                                        <td>
                                            <a href="">
                                                <img width="100px" height="100px" src="">
                                            </a>
                                        </td>
                                        <td>{{$drug->drug_from}}</td>
                                        <td>{{$drug->drug_distrebution}}</td>
                                        <td>{{$drug->drug_warranty}}</td>
                                        <td>
                                            @if($drug->drug_status==1)
                                                Còn hàng
                                            @endif
                                            @if($drug->drug_status==0)
                                                Hết hàng
                                            @endif
                                        </td>
                                        <td>
                                        
                                        @foreach($cate_drug as $cate)
                                            @if($drug->catedrug_id==$cate->catedru_id)
                                                {{$cate->catedru_name}}  
                                            @endif       
                                        @endforeach 
                                        </td>
                                        
                                        <td>
                                        <a href="{{asset('admin/drug/edit/'.$drug->drug_id)}}"><button type="button" class="btn btn-warning"><i class="fas fa-pen-square"></i></button></a>
                                        <a href="{{asset('admin/drug/del/'.$drug->drug_id)}}"><button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                    <div aria-label="Page navigation">
                        {{$drugs->links()}}
                    </div>
</div>
@stop