@extends('index_Chuan.admin.Layout_admin.index')

@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Ngành
                        <small>Thêm</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
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
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="{{ route('postMajor.create') }}" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label>Tên</label>
                                <input class="form-control" type="text" name="name" placeholder="Nhập Tên Khoa...." />
                            </div>

                            <div class="form-group">
                                <label>faculity_major_id </label>
                                    <select class="form-control" name="faculity_major_id">
                                        @foreach ($faculity as $fl)
                                            <option value="{{ $fl->id }}">{{ $fl->name }}</option>
                                        @endforeach
                                    </select>
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
    </div>
@endsection
@include('index_Chuan.admin.Layout_admin.footer')
