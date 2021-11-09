@extends('index_Chuan.Layout.master')
@section('menu')
    @include('index_Chuan.Layout.menu')
@endsection
@section('content')
    <div class="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="{{asset('upload/images/dh-thang-long.jpg')}}" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6" style="font-family: 'Barlow';">
                    <div class="section-header text-left">
                        <h2>
                            <b> Đại học định hướng ứng dụng</b>
                        </h2>
                    </div>
                    <div class="about-content" style="font-size: x-large;">
                        <p style="text-align: center;">
                            Đại học Thăng Long là một trung tâm giáo dục đa ngành, đa nghề, định hướng ứng dụng; với mô hình
                            đào tạo - học tập cập nhật theo môi trường làm việc thực tế. Với niềm tâm huyết của những nhà
                            thiết kế giáo dục, chúng tôi cam kết xây dựng một môi trường giáo dục tốt nhất, cập nhật nhất
                            dành cho sinh viên.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-content" style="font-size: x-large;">
                        <p style="text-align: center;">

                        </p>
                    </div>
                </div>
                <div class="col-ml-6">
                    <p style="font-size: x-large;text-align:center;">Trường Đại học Thăng Long là cơ sở đào tạo đa ngành,
                        nghiên cứu và chuyển giao công nghệ theo định
                        hướng ứng dụng, cung cấp nguồn nhân lực chất lượng cao phục vụ sự nghiệp công nghiệp hoá, hiện đại
                        hoá và hội nhập quốc tế của đất nước.</p>
                </div>
                
                <div class="col-md-12" style="font-family: 'Barlow';">
                    <div class="about-img">
                        <img src="{{ asset('upload/images/gioithieu.jpg') }}" alt="Image">
                    </div>
                </div>
                <div class="col-ml-6">
                    <p style="font-size: x-large;text-align:center;">
                    <div class="col-ml-6">
                        <p style="font-size: x-large;text-align:center;">Đào tạo nhân lực, bồi dưỡng nhân tài trình độ đại
                            học và sau đại học đa ngành với chất lượng cao gắn với nhu cầu xã hội; đẩy mạnh hợp tác quốc tế
                            và nghiên cứu khoa học; xây dựng Trường theo định hướng đại học ứng dụng và hội nhập quốc tế,
                            góp phần vào sự nghiệp công nghiệp hóa, hiện đại hóa đất nước. </p>
                    </div>
                    <br>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('slide')
    {{-- @include('index_Chuan.Layout.slide') --}}
@endsection
