@extends('index_Chuan.Layout.master')
@section('menu')
    @include('index_Chuan.Layout.menu')
@endsection
@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $err)
                                    {{ $err }}<br>
                                @endforeach
                            </div>
                        @endif

                        @if (session('Thongbao'))
                            <div class="alert alert-success">
                                {{ session('Thongbao') }}
                            </div>
                        @endif
                    <h1 class="page-header">
                        <small style="color:rgb(248, 240, 240); font-size:50px;">Thêm Bài Tuyển Dụng</small>
                    </h1>

                    <form action="{{ route('postRecruitment') }}" method="post" class="create-form"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row line-item">
                            <div class="col-md-2">
                                <label><b style="font-size: 30px;">Tiêu đề</b></label>
                            </div>
                            <div class="col-md-8">
                                <input style="height: 100px;" type="text" name="title" class="form-control"
                                    placeholder="Nhập tiêu đề.............">
                            </div>
                        </div> <br>
                        <div class="row line-item">
                            <div class="col-md-2">
                                <label><b style="font-size: 30px;">Tóm Tắt</b></label>
                            </div>
                            <div class="col-md-8">
                                <textarea class="ckeditor" name="summary" id="demo" rows="3"></textarea>
                            </div>
                        </div><br>
                        <div class="row line-item">
                            <div class="col-md-2">
                                <label><b style="font-size: 30px;">Nội dung</b></label>
                            </div>
                            <div class="col-md-8">
                                <textarea class="ckeditor" name="content" id="demo" rows="5"></textarea>
                            </div>
                        </div><br>
                        <div class="row line-item">
                            <div class="col-md-2">
                                <label><b style="font-size: 30px;">Hình ảnh</b></label>
                            </div>
                            <div class="col-md-4">
                                <input type="file" name="img">
                            </div>
                        </div><br>
                        <div class="row line-item">
                            <div class="col-md-2"></div>
                            <div class="col-md-4">
                                <input type="submit" value="Gửi" class="btn btn-primary">
                                <input type="reset" value="Nhập lại" class="btn btn-danger">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
@endsection
@section('slide')
    {{-- @include('index_Chuan.Layout.slide') --}}
@endsection
