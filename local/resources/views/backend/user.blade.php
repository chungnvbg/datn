@extends('Backend.master')
@section('title','Nhân Viên')
@section('main')

       <div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">Danh sách nhân viên</h4>
                    <a href="{{asset('admin/user/adduser')}}">
                        <button style="margin-bottom: 20px;" type="button" class="btn btn-info"><i class="fas fa-plus"></i> Thêm Thành Viên</button>
                    </a>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">STT</th>
                                    <th scope="col">Avatar</th>
                                    <th scope="col">Họ Và Tên</th>
                                    <th scope="col">Gmail</th>
                                    <th scope="col">Địa Chỉ</th>
                                    <th scope="col">Tuổi</th>
                                    <th scope="col">Chức Vụ</th>
                                    <th scope="col">Tùy chọn</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <th scope="row">{{$user->id}}</th>
                                    <td>
                                        <a href="{{asset('admin/user/edit/'.$user->id)}}">
                                            <img width="100px" height="100px" src="{{asset('local/storage/app/avatar/'.$user->avatar)}}">
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{asset('admin/user/edit/'.$user->id)}}">
                                        {{$user->name}}
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{asset('admin/user/edit/'.$user->id)}}">
                                        {{$user->email}}
                                        </a>
                                    </td>
                                    <td>{{$user->address}}</td>
                                    <td>{{$user->age}}</td>
                                    <td>
                                        
                                        @foreach($roles as $role)
                                                 @if($user->level==$role->id) 
                                                 {{$role->name}}
                                                 @endif                                               
                                        @endforeach
                                    </td>
                                    <td>
                                    <a href="{{asset('admin/user/edit/'.$user->id)}}"><button type="button" class="btn btn-warning">Sửa</button></a>

                                    <a href="{{asset('admin/user/deluser/'.$user->id)}}"><button type="button" class="btn btn-danger" onclick="return confirm('Bạn có chắc muốn xóa?')">Xóa</button></a>

                                    </td>
                                    
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
        </div>
<!--// Contacts -->
@stop