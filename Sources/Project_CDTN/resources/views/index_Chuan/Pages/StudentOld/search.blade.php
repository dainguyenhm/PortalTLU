@extends('index_Chuan.Layout.master')
@section('menu')
    @include('index_Chuan.Layout.menu')
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="cod-md-12">
                <?php
                function color($str, $keyword)
                {
                    return str_replace($keyword, "<span style='color:red'>$keyword</span>", $str);
                }
                ?>
                <h1 class="page-header">
                    <small style=" font-size:50px;">Danh sách sinh viên đã tốt nghiệp <br> Đợt {{ $period_key }} Năm
                        {{ $years_key }} </small>
                </h1>
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
                    <form action="{{ route('oldStudent.search') }}" method="GET">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <div class="form-group">
                                <label><b style="font-size: 25px;">Đợt Tốt Nghiệp</b></label>
                                <input class="form-control" name="period_key" placeholder="Nhập Đợt Tốt Nghiệp...." />
                            </div>
                            <div class="form-group">
                                <label><b style="font-size: 25px;">Năm Tốt Nghiệp</b></label>
                                <input class="form-control" name="years_key" placeholder="Nhập Năm Tốt Nghiệp...." />
                            </div>
                            <button type="submit" class="btn btn-info">Tìm Kiếm</button>

                            <form>
                        </div><br>

                        <div>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">MSV</th>
                                        <th scope="col">Họ Tên</th>
                                        <th scope="col">Ngày Sinh</th>
                                        <th scope="col">Giới Tính</th>
                                        <th scope="col">Dân Tộc</th>
                                        <th scope="col">Nơi Sinh</th>
                                        <th scope="col">Quốc Tịch</th>
                                        <th scope="col">Nhập Học</th>
                                        <th scope="col">Nghành Tốt Nghiệp</th>
                                        <th scope="col">Loại</th>
                                        <th scope="col">Năm Tốt Nghiệp</th>
                                        <th scope="col">Hình Thức</th>
                                        <th scope="col">Số Quyết Định Tốt Nghiệp</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($period as $period)
                                        <tr>
                                            <th scope="row">{{ $period->student_code }}</th>
                                            <td>{{ $period->User->first_name }}&nbsp;{{ $period->User->last_name }}
                                            </td>
                                            <td>{{ $period->User->date_birth }}</td>
                                            <td>
                                                @switch ($period->User->sex )
                                                    @case (0)
                                                        {{ 'Nữ' }}
                                                    @break;

                                                    @case (1)
                                                        {{ 'Nam' }}
                                                    @break;

                                                @endswitch

                                            </td>
                                            <td>{{ $period->User->nation }}</td>
                                            <td>{{ $period->User->place_birth }}</td>
                                            <td>{{ $period->User->nationality }}</td>
                                            <td>{{ $period->class }}</td>
                                            <td>
                                                @switch($period->faculity_id)
                                                    @case(10)
                                                        {{ 'Khoa học Máy Tính' }}
                                                    @break
                                                    @case(9)
                                                        {{ 'Toán Ứng Dụng' }}
                                                    @break
                                                    @case(11)
                                                        {{ 'Mạng Truyền Thông & Truyền Thông Dữ Liệu' }}
                                                    @break
                                                    @case(12)
                                                        {{ 'Hệ Thống Thông Tin' }}
                                                    @break
                                                    @case( 14)
                                                        {{ 'Trí Tuệ Nhân Tạo' }}
                                                    @break
                                                    @case(13)
                                                        {{ 'Công Nghệ Thông tin' }}
                                                    @break
                                                    @case( 15)
                                                        {{ 'Kế Toán' }}
                                                    @break
                                                    @case(16)
                                                        {{ 'Tài Chính Ngân Hàng' }}
                                                    @break
                                                    @case(17)
                                                        {{ 'Quản Trị Kinh Doanh' }}
                                                    @break
                                                    @case(18)
                                                        {{ 'Marketing' }}
                                                    @break
                                                    @case(19)
                                                        {{ 'Logitics & Quản Lý Chuỗi Cung Ứng' }}
                                                    @break
                                                    @case(20)
                                                        {{ 'Luật Kinh Tế' }}
                                                    @break
                                                    @case(21)
                                                        {{ 'Kinh Tế Quốc Tế' }}
                                                    @break
                                                    @case(22)
                                                        {{ 'Điều Dưỡng' }}
                                                    @break
                                                    @case(23)
                                                        {{ 'Dinh Dưỡng' }}
                                                    @break
                                                    @case(24)
                                                        {{ 'Ngôn Ngữ Anh' }}
                                                    @break
                                                    @case(25)
                                                        {{ 'Ngôn Ngữ Nhật Bản' }}
                                                    @break
                                                    @case(28)
                                                        {{ 'Ngôn Ngữ Hàn Quốc' }}
                                                    @break
                                                    @case(29)
                                                        {{ 'Ngôn Ngữ Trung Quốc' }}
                                                    @break
                                                    @case(30)
                                                        {{ 'Việt Nam Học' }}
                                                    @break
                                                    @case(31)
                                                        {{ 'Công Tác Xã Hội' }}
                                                    @break
                                                    @case(32)
                                                        {{ 'Quản Trị & Du Lịch - Lữ Hành' }}
                                                    @break
                                                    @case(33)
                                                        {{ 'Thanh Nhạc' }}
                                                    @break
                                                    @case(34)
                                                        {{ 'Truyền Thông Đa Phương Tiện' }}
                                                    @break
                                                    @default

                                                @endswitch
                                            </td>
                                            <td>
                                                @switch ($period->graduation_type )
                                                    @case (0)
                                                        {{ 'Xuất Sắc' }}
                                                    @break;
                                                    @case (1)
                                                        {{ 'Giỏi' }}
                                                    @break;
                                                    @case (2)
                                                        {{ 'Khá' }}
                                                    @break;
                                                    @case (3)
                                                        {{ 'Trung Bình' }}
                                                    @break;
                                                @endswitch
                                            </td>
                                            <td>{{ $period->graduation_year }}</td>
                                            <td>{{ $period->graduation_form }}</td>
                                            <td>{{ $period->decision }}</td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
        </div>
    @endsection
    @section('slide')
        {{-- @include('index_Chuan.Layout.slide') --}}
    @endsection
