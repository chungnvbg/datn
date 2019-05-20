@extends('Backend.master')
@section('title','Khách hàng')
@section('main')

    <!-- main -->
        <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">Danh sách khách hàng</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Họ Và Tên</th>
                                    <th scope="col">Tuổi</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Địa Chỉ</th>
                                    <th scope="col">Giới Tính</th>
                                    <th scope="col">Vị Trí</th>
                                    <th scope="col">Trạng Thái</th>
                                    <th scope="col">Tùy Chọn</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($clients as $cli)
                                <tr>
                                    <th scope="row">{{$cli->cli_id}}</th>
                                    <td>{{$cli->cli_name}}</td>
                                    <td>{{$cli->cli_age}}</td>
                                    <td>{{$cli->cli_phone}}</td>
                                    <td>{{$cli->cli_email}}</td>
                                    <td>{{$cli->cli_address}}</td>
                                    <td>@if($cli->cli_sex==1)
                                            nam
                                        @endif
                                        @if($cli->cli_sex==2)
                                            nữ
                                        @endif</td>
                                    <td>
                                        @if($cli->cli_level==0)
                                           Ngoại trú
                                        @endif
                                        @if($cli->cli_status==1)
                                            Nội trú
                                        @endif
                                    </td>
                                    <td>
                                        @if($cli->cli_status==0)
                                           Chưa thanh toán 
                                        @endif
                                        @if($cli->cli_status==1)
                                            Đã thanh toán
                                        @endif
                                    </td>
                                    <td>
                                        @if($cli->cli_level==0)
                                           <a href="{{asset('admin/client/send/'.$cli->cli_id)}}"><button type="button" class="btn btn-warning"><i class="fas fa-envelope-square"></i></button></a> <!-- nhắc lịch hẹn đối vs bệnh nhân điều trị ngoại trú -->
                                        @endif
                                       
                                        <a style="margin-top:10px;" href="{{asset('admin/client/del/'.$cli->cli_id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"><button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                     <div aria-label="Page navigation">
                        {{$clients->links()}}
                    </div>
        </div>
       
    <!-- end main -->
@stop
            