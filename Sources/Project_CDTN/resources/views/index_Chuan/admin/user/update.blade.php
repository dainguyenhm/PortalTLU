@extends('index_Chuan.admin.Layout_admin.index')

@section('content')
           <!-- Page Content -->
           <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">User
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
                        <form action="{{ route('postUser.update',$user->id) }}" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label>Họ</label>
                                <input class="form-control" name="first_name" value="{{$user->first_name}}"  placeholder="" />
                            </div>
                            <div class="form-group">
                                <label>Tên</label>
                                <input class="form-control" name="last_name" value="{{$user->last_name}}" placeholder="Nhập tên người dùng...." />
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" type="email" name="email" value="{{$user->email}}" placeholder="Nhập địa chỉ email..." />
                            </div>
                            <div class="form-group">
                                <label>Ngày Sinh</label>
                                <input class="form-control" type="date" name="date_birth" value="{{$user->date_birth}}" placeholder="" />
                            </div>
                            <div class="form-group">
                                <label>Địa Chỉ</label>
                                <input class="form-control" type="text" name="address" value="{{$user->address}}" placeholder="Nhập địa chỉ....." />
                            </div>
                            <div class="form-group">
                                <label>Số Điện Thoại</label>
                                <input class="form-control" type="text" name="phone_number" value="{{$user->phone_number}}" placeholder="Nhập số điện thoại....." />
                            </div>
                            <div class="form-group">
                                <label>UserName</label>
                                <input class="form-control" name="user_name" value="{{$user->user_name}}" placeholder="Nhập tên người dùng...." />
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input class="form-control" name="password" placeholder="Nhập Mật khẩu....." value="{{$user->password}}" type="password" />
                            </div>
                            <div class="form-group">
                                <label>Nhập lại Password</label>
                                <input class="form-control" name="passwordAgain" value="{{$user->passwordAgain}}" placeholder="Nhập lại Mật khẩu....." type="password" />
                            </div>
                            <div class="form-group">
                                <label>Loại User</label>
                                <label class="radio-inline">
                                    <input name="type" value="0" checked="" type="radio">Admin
                                </label>
                                <label class="radio-inline">
                                    <input name="type" value="1" type="radio">Sinh Viên
                                </label>
                                <label class="radio-inline">
                                    <input name="type" value="2" type="radio">Giảng Viên
                                </label>
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