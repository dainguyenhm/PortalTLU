@extends('index_Chuan.Layout.master')
@section('menu')
    @include('index_Chuan.Layout.menu')
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="cod-md-12">
                <h1 class="page-header">
                    <small style=" font-size:50px;">Danh sách sinh viên đã tốt nghiệp</small>
                </h1>
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
                                <th scope="col">Xem Bảng Điểm</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($student as $student)
                                <tr>
                                    <th scope="row">{{ $student->student_code }}</th>
                                    <td>{{ $student->User->first_name }}&nbsp;{{ $student->User->last_name }}</td>
                                    <td>{{ $student->User->date_birth }}</td>
                                    <td> 
                                        @switch ($student->User->sex )
                                            @case (0)
                                                {{'Nữ'}}
                                            @break;

                                            @case (1)
                                                {{'Nam'}}
                                            @break;
                        
                                        @endswitch

                                    </td>
                                    <td>{{ $student->User->nation }}</td>
                                    <td>{{ $student->User->place_birth }}</td>
                                    <td>{{ $student->User->nationality }}</td>
                                    <td>{{ $student->class }}</td>
                                    <td>
                                        @switch($student->faculity_id)
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
                                        @switch ($student->graduation_type )
                                        @case (0)
                                            {{'Xuất Sắc'}}
                                        @break;
                                        @case (1)
                                            {{'Giỏi'}}
                                        @break;
                                        @case (2)
                                            {{'Khá'}}
                                        @break;
                                        @case (3)
                                            {{'Trung Bình'}}
                                        @break;
                                    @endswitch
                                    </td>
                                    <td>{{ $student->graduation_year }}</td>
                                    <td>{{ $student->graduation_form }}</td>
                                    <td>{{ $student->decision }}</td>
                                    <td><input type="submit" value="Xem Bảng Điểm" class="btn btn-primary"></td>
                                </tr>
                            @endforeach

                            {{-- <tr>
                            <th scope="row">A30070</th>
                            <td>Nguyễn Tú Điền</td>
                            <td>16/09/1999</td>
                            <td>Nam</td>
                            <td>Kinh</td>
                            <td>Hà Tây</td>
                            <td>Việt Nam</td>
                            <td>TI30h1</td>
                            <td>Khoa Học Máy Tính</td>
                            <td>Khá</td>
                            <td>2021</td>
                            <td>Đại Học Chính Quy</td>
                            <td>21101805/QĐ-ĐHTL ngày 18/10/2021</td>
                            <td><input type="submit" value="Xem Bảng Điểm" class="btn btn-primary"></td>
                        </tr>

                        <tr>
                            <th scope="row">A30517</th>
                            <td>Hoàng Hải Dương</td>
                            <td>01/01/1999</td>
                            <td>Nam</td>
                            <td>Kinh</td>
                            <td>Hà Nội</td>
                            <td>Việt Nam</td>
                            <td>TI30h1</td>
                            <td>Khoa Học Máy Tính</td>
                            <td>Khá</td>
                            <td>2021</td>
                            <td>Đại Học Chính Quy</td>
                            <td>21101805/QĐ-ĐHTL ngày 18/10/2021</td>
                            <td><input type="submit" value="Xem Bảng Điểm" class="btn btn-primary"></td>
                        </tr> --}}
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
