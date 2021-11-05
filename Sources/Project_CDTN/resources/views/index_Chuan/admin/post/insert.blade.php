@extends('index_Chuan.admin.Layout_admin.index')

@section('content')
           <!-- Page Content -->
           <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Bài Viết
                            <small>Thêm</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        @if(count($errors)>0)
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $err)
                                    {{ $err }}<br>
                                @endforeach
                            </div>
                        @endif

                        @if(session('Thongbao'))
                            <div class="alert alert-success">
                                {{ session('Thongbao') }}
                            </div>
                        @endif
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" >
                            <div class="form-group">
                                <label>Chọn User</label>
                                <select class="form-control" name="user_id" id="LoaiTin">
                                    @foreach ($user as $us)
                                    <option value="{{$us->id}}">{{$us->first_name}}&nbsp;{{$us->last_name}}</option>
                                    @endforeach
                                </select>
                            </div> 
                            <div class="form-group">
                                <label>Tiêu đề</label>
                                <input class="form-control" name="title" placeholder="Nhập tiêu đề" />
                            </div>
                            <div class="form-group">
                                <label>Tóm tắt</label>
                                <textarea class="ckeditor" name="summary" id="demo" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Nội dung</label>
                                <textarea class="ckeditor" name="content" id="demo" rows="5"></textarea>
                            </div>

                            <div class="form-group">
                                <label>Loại Bài Viết</label>
                                <label class="radio-inline">
                                    <input name="type" value="0" checked="" type="radio">Thông Báo
                                </label>
                                <label class="radio-inline">
                                    <input name="type" value="1" type="radio">Bài Viết
                                </label>
                            </div>
                            <div class="form-group">
                                <label>Hình ảnh</label>
                                <input type="file" name="img" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Links</label>
                                <input class="form-control" name="links" placeholder="Nhập links...." />
                            </div>
                            <div class="form-group">
                                <label>Trạng Thái</label>
                                <label class="radio-inline">
                                    <input name="status" value="0" checked="" type="radio">Chưa Duyệt
                                </label>
                                <label class="radio-inline">
                                    <input name="status" value="1" type="radio">Duyệt
                                </label>
                                <div class="form-group">
                                    <label>Chọn file</label>
                                    <input type="file" name="pdf" class="form-control">
                                </div>
                            </div>
                            
                            <button type="submit" class="btn btn-info">Thêm</button>
                            <button type="reset" class="btn btn-secondary">Đặt Lại</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection
@include('index_Chuan.admin.Layout_admin.footer')