@extends('Backend.master')
@section('title','Chức Vụ')
@section('main')
<div class="outer-w3-agile mt-3">
                    <h4 class="tittle-w3-agileits mb-4">Quản Lý Vị Trí Nhân Viên</h4>
                    <a href="{{asset('admin/user/addrole/')}}"><button type="button" class="btn btn-dark"><i class="fas fa-plus"></i> Thêm Vị Trí</button></a>
                    <div class="container-fluid" style=" margin-top: 20px;">
                        <div class="row">
                            <table class="table col-xl mr-xl-3">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Tên Vị Trí</th>
                                        <th scope="col">Tùy Chọn</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($roles as $role)
                                    <tr class="table-active">
                                        <th scope="row">{{$role->id}}</th>
                                        <td style="color: blue"><h5>{{$role->name}}</h5></td>
                                        <td>
                                          <a href="{{asset('admin/user/editrole/'.$role->id)}}"><button type="button" class="btn btn-warning">Sửa</button></a>
                                          <a href="{{asset('admin/user/del/'.$role->id)}}" onclick=" return confirm('Bạn có chắc muốn xóa?')"><button type="button" class="btn btn-danger">Xóa</button></a>
                                            
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