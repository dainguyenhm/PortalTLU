@extends('index_Chuan.Layout.master')
@section('menu')
    @include('index_Chuan.Layout.menu')
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="cod-md-12">

                <h1 class="page-header">
                    <small style=" font-size:50px;">Tra Cứu danh sách sinh viên đã tốt nghiệp</small>
                </h1>

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
                <form action="{{ route('oldStudent.search') }}" method="GET">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <div class="form-group">
                            <label><b style="font-size: 25px;">Đợt Tốt Nghiệp</b></label>
                            <input class="form-control" name="first_name" placeholder="Nhập Đợt Tốt Nghiệp...." />
                        </div>
                        <div class="form-group">
                            <label><b style="font-size: 25px;">Năm Tốt Nghiệp</b></label>
                            <input class="form-control" name="last_name" placeholder="Nhập Năm Tốt Nghiệp...." />
                        </div>
                        <button type="submit" class="btn btn-info">Tìm Kiếm</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('slide')
    {{-- @include('index_Chuan.Layout.slide') --}}
@endsection
