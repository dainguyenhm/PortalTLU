@extends('index_Chuan.Layout.master')
@section('menu')
    @include('index_Chuan.Layout.menu')
@endsection
@section('content')

    <div class="single">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="single-content">
                        <img src="{{ asset('asset/img/phonghoc2.jpg') }}" />
                        <h2><b>Hệ sinh thái học Âm nhạc ứng dụng</b></h2>
                        <p> Tại Khoa Âm nhạc Ứng dụng, chúng tôi thiết kế hệ sinh thái giúp các em học tập đa dạng, từ
                            luyện thanh, chơi nhạc cụ, biểu diễn trên sân khấu đến sản xuất âm nhạc. Các em sẽ được học
                            sản xuất âm nhạc trên nền tảng thiết bị máy tính iMac cài đặt các phần mềm chuyên nghiệp
                            phục vụ cho việc học và sản xuất nhạc. Đây là những phần mềm cập nhật nhất để sinh viên có
                            thể tự biên tập âm nhạc; nhờ đó, sau khi tốt nghiệp các bạn không chỉ trở thành ca sĩ mà còn
                            có cơ hội trở thành nhạc sĩ, producer, DJ, dancer… chuyên nghiệp. </p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="sidebar-widget">
                            <div class="single-bio">
                                <div class="single-bio-img">
                                    <img src="{{ asset('asset/img/phonghoc2.jpg') }}" />
                                </div>
                                <div class="single-bio-text">
                                    <h3>Cơ Sở Vật Chất</h3>
                                    <p>
                                        Hệ sinh thái học Âm nhạc ứng dụng
                                    </p>
                                </div>
                                <div class="single-bio-social">
                                    <a class="btn" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn" href=""><i class="fab fa-youtube"></i></a>
                                    <a class="btn" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('slide')
    {{-- @include('index_Chuan.Layout.slide') --}}
@endsection
