@extends('Backend.master')
@section('title','Sửa Danh mục thuốc')
@section('main')
<div class="outer-w3-agile col-xl mt-3 mr-xl-3">
                            <h4 class="tittle-w3-agileits mb-4">Sửa Danh Mục Thuốc</h4>
                            @if(isset($errors))
                                @foreach($errors->all() as $error)
                                    <div class="alert alert-danger">{{$error}}</div>
                                @endforeach
                            @endif
                            <form method="post">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Tên Mục Thuốc</label>
                                    <div class="col-sm-10">
                                        <input name="name" type="text" class="form-control" id="inputEmail3" value="{{$catedrugs->catedru_name}}" required="">
                                    </div>
                                </div>
                                
                                <fieldset class="form-group">
                                    <div class="row">
                                        <label class="col-form-label col-sm-2 pt-0">Trạng Thái</label>
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="status" id="gridRadios1" value=1 @if($catedrugs->catedru_status==1) checked @endif>
                                                <label class="form-check-label" for="gridRadios1">
                                                    Còn hàng
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="status" id="gridRadios2" value=0  @if($catedrugs->catedru_status==0) checked @endif>
                                                <label class="form-check-label" for="gridRadios2">
                                                    Hết hàng
                                                </label>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </fieldset>
                                
                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <input type="submit" class="btn btn-primary" value="Thêm">
                                    </div>
                                </div>
                                {{csrf_field()}}
                            </form>
</div>
@stop