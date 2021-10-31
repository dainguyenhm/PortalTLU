@extends('index_Chuan.Layout.master')
@section('menu')
    @include('index_Chuan.Layout.menu')
@endsection
@section('content')

    <!-- About Start -->
    <div class="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="{{ asset('upload/images/hoc-bong.jpg') }}" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-header text-left">
                        <p>Học Bổng</p>
                        <h1><b>THÔNG BÁO Học bổng hệ đại học tại trường Đại học Nanzan, Nhật Bản 2021</b></h1>
                    </div>
                    <div class="about-content">
                        <p>Trường Đại học Thăng Long xin thông báo học bổng hệ đại học của trường Đại học Nanzan, Nhật Bản
                            cho sinh viên ĐH Thăng Long như sau:</p>
                        <h4> <b> Học bổng: </b></h4>
                        <p>Miễn học phí trong suốt 4 năm học (bao gồm 2 năm đầu học tiếng Nhật; thời gian học tiếng Nhật có
                            thể rút ngắn nếu sinh viên đã có năng lực tiếng Nhật ở trình độ trung cấp hoặc cao cấp)
                        </p>
                        <p>Nhận trợ cấp 40.000JPY/tháng từ trường Đại học Nanzan</p>
                        <h4><b>Khóa nhập học: Tháng 9/2021</b></h4>
                        <h4><b>Ngành học:</b></h4>
                        <p>
                            Nghiên cứu Chính sách (Departmet of Policy Studies), Khoa Nghiên cứu Chính sách (Faculty of
                            Policy Studies), Đại học Nanzan, Nhật Bản
                        </p>
                        <h4><b>Điều kiện đăng ký:</b></h4>
                        <p>Sinh viên thuộc mọi chuyên ngành học tại Thăng Long từ bắt đầu năm thứ 2 trở lên (tính đến tháng
                            12/2020)</p>
                        <p>Điểm GPA: từ 8.0 trở lên (tính đến thời điểm nộp hồ sơ)</p>
                        <p>Sinh viên nộp hồ sơ kèm bảng điểm các học kì đã hoàn tất (4 học kì)</p>
                        <h4><b>Thời hạn đăng ký xét học bổng:</b></h4>
                        <p>Trước ngày 01/03/2021 tại biểu mẫu <a
                                href="https://forms.gle/qezB3qu6uDPTnatQ6">https://forms.gle/qezB3qu6uDPTnatQ6</a> hoặc trực
                            tiếp tại phòng Hợp tác Quốc tế.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

@endsection
@section('slide')
    {{-- @include('index_Chuan.Layout.slide') --}}
@endsection
