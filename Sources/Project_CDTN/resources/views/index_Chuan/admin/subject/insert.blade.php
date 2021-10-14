@extends('index_Chuan.admin.Layout_admin.index')

@section('content')
           <!-- Page Content -->
           <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Môn Học
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
                        <form action="{{route('postSubject.create')}}" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label>Tên Môn Học</label>
                                <input class="form-control" type="text" name="name" placeholder="Nhập tên môn học...." />
                            </div>
                            <div class="form-group">
                                <label>Mã Môn Học</label>
                                <input class="form-control" type="text" name="subject_code" placeholder="Nhập mã mônn học...." />
                            </div>
                            <div class="form-group">
                                <label>Số tín chỉ</label>
                                <input class="form-control" type="text" name="credit" placeholder="Nhập số tín chỉ...." />
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