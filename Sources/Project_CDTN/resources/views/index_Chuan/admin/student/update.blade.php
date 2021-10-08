@extends('index_Chuan.admin.Layout_admin.index')

@section('content')
           <!-- Page Content -->
           <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Sinh Viên
                            <small>Sửa</small>
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
                        <form action="{{route('postStudent.update',$student->id)}}" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label>Mã Sinh Viên</label>
                                <input class="form-control" type="text" name="student_code" value="{{$student->student_code}}" placeholder="Nhập mã sinh viên...." />
                            </div>
                            <div class="form-group">
                                <label>Tình Trạng</label>
                                <label class="radio-inline">
                                    <input name="type" value="0" checked="" type="radio">Đang Học
                                </label>
                                <label class="radio-inline">
                                    <input name="type" value="1" type="radio">Đã Tốt Nghiệp
                                </label>
                            </div>
                            {{-- <div class="form-group">
                                <label>Chọn User</label>
                                    <select class="form-control" name="user_id">
                                        @foreach ($user as $us)
                                            <option value="{{ $us->id }}">{{ $us->first_name}}&nbsp;{{$us->last_name }}</option>
                                        @endforeach
                                    </select>
                            </div> --}}
                            <div class="form-group">
                                <label>Khoa</label>
                                    <select class="form-control" name="">
                                        @foreach ($faculity as $fl)
                                            <option value="{{ $fl->id }}">{{ $fl->name}}</option>
                                        @endforeach
                                    </select>
                            </div>
                            <div class="form-group">
                                <label>Chuyên Nghành</label>
                                    <select class="form-control" name="faculity_id">
                                        @foreach ($major as $mj)
                                            <option value="{{ $mj->id }}">{{ $mj->name}}</option>
                                        @endforeach
                                    </select>
                            </div>
                            <button type="submit" class="btn btn-info">Sửa</button>
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