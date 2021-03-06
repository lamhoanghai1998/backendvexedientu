@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Sơ đồ ghế
                            <small>thêm</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        @if(count($errors) > 0)
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $err){{$err}}<br>
                                @endforeach      
                            </div>
                        @endif

                        @if(session('thongbao'))
                            <div class="alert alert-success">
                                {{session('thongbao')}}
                            </div>
                        @endif
                        <form action="admin/sodoghe/them" method="POST" enctype="multipart/form-data">
                             <input type="hidden" name="_token" value="{{csrf_token()}}" />
                            <div class="form-group">
                                <label>Tên sơ đồ ghế</label>
                                <input class="form-control" name="TenSoDo" placeholder="Nhập tên sơ đồ ghế" />
                            </div>
                            
                            <div class="form-group">
                                <label>Số dòng</label>
                                <input class="form-control" name="SoDong" placeholder="Nhập số dòng" />
                            </div>

                            <div class="form-group">
                                <label>Số cột</label>
                                <input class="form-control" name="SoCot" placeholder="Nhập số cột" />
                            </div>
                            <div class="form-group">
                                <label>Hình</label>
                                <input type="file" name="UrlHinh">
                            </div>
                            <button type="submit" class="btn btn-default">Thêm sơ đồ ghế</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection