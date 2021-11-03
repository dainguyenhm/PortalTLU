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
                <div class="col-lg-7" style="padding-bottom:120px">
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
                    <small style="color: ghostwhite;">Thêm mới Bài Tuyển Dụng</small>
                </h1>
            </div>
        </div>

        <form action="{{route('postRecruitment')}}" method="post" class="create-form" enctype="multipart/form-data">
            @csrf
            <div class="row line-item">
                <div class="col-md-2">
                    <label>Tiêu đề</label>
                </div>
                <div class="col-md-8">
                    <input style="height: 100px;" type="text" name="title" class="form-control" placeholder="Nhập tiêu đề.............">
                </div>
            </div> <br>
            <div class="row line-item">
                <div class="col-md-2">
                    <label>Tóm Tắt</label>
                </div>
                <div class="col-md-8">
                    <textarea class="ckeditor" name="summary" id="demo" rows="3"></textarea>
                </div>
            </div><br>
            <div class="row line-item">
                <div class="col-md-2">
                    <label>Nội dung</label>
                </div>
                <div class="col-md-8">
                    <textarea class="ckeditor" name="content" id="demo" rows="5"></textarea>
                </div>
            </div><br>
            <div class="row line-item">
                <div class="col-md-2">
                    <label>Hình ảnh</label>
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
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection
@section('slide')
    {{-- @include('index_Chuan.Layout.slide') --}}
@endsection
