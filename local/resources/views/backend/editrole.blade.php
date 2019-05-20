@extends('Backend.master')
@section('title','Sửa Chức Vụ')
@section('main')
<div class="outer-w3-agile mt-4" style="max-width: 50%; margin-left: 100px;">
                    <h4 class="tittle-w3-agileits mb-4">Thêm Vị Trí</h4>
                    @if(isset($errors))
                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger">{{$error}}</div>
                        @endforeach
                    @endif
                   <form method="post" class="card p-2">
                                <div class="input-group">
                                    <input name="name" type="text" class="form-control" value="{{$role->name}}" required="">
                                    <div class="input-group-append">
                                        <input type="submit" class="btn btn-secondary" value="Thêm">
                                    </div>
                                </div>
                                {{csrf_field()}}
                    </form>
</div>
@stop