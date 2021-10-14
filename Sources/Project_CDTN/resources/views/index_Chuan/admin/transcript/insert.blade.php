@extends('index_Chuan.admin.Layout_admin.index')

@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Bảng điểm
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
                        {{-- <form action="{{ route('posttranscript.create') }}" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label>Chọn file Excel</label>
                                <input class="form-control" type="file" name="file" placeholder="Chọn file excel..." />
                            </div>
                            <button type="submit" class="btn btn-info">Thêm</button>
                            <button type="reset" class="btn btn-secondary">Đặt Lại</button>
                        <form> --}}
                        {{-- <form action="{{ url('admin/transcript/import-csv') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="file" accept=".xlsx"><br>
                            <input type="submit" value="Import File Excel" name="import_csv" class="btn btn-info">
                            <button type="reset" class="btn btn-secondary">Đặt Lại</button>
                        </form> --}}
                        <div class="card-body">
                            <form action="{{ route('Transcript.import') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <label>Import path file to Wards</label>
                                <input type="file" name="pathfile" accept=".xlsx" class="form-control">
                                <br>
                                <input type="submit" class="btn btn-outline-primary" value="Import">
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
    @endsection
    @include('index_Chuan.admin.Layout_admin.footer')
