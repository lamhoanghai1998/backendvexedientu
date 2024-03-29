@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Xe
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
                        <form action="admin/xe/them" method="POST" enctype="multipart/form-data">
                             <input type="hidden" name="_token" value="{{csrf_token()}}" />
                            <div class="form-group">
                                <label>Biển số xe</label>
                                <input class="form-control" name="BSXe" placeholder="Nhập biển số xe" />
                            </div>
                            
                            <div class="form-group">
                                <label>ID Sơ đồ ghế</label>
                               <select class="form-control" name="idCV">
                                   
                                    <option value="1">Xe Limousine</option>
                                    <option value="2">Xe giường nằm</option>
                                    <option value="3">Xe phòng vip</option>
                                    
                                </select>
                            </div>
                            
                            
                            <button type="submit" class="btn btn-default">Thêm Xe</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection