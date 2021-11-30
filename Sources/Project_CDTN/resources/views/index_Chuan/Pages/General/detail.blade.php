@extends('index_Chuan.Layout.master')
@section('menu')
    @include('index_Chuan.Layout.menu')
@endsection
@section('content')
    <!-- Single Post Start-->
    <div class="single">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="single-content">

                        <h1 style="font-family: 'Font Awesome 5 Pro'; font-size: 40px;">{!! $post->title !!}</h1>
                        <hr>
                        <div style="font-size: 20px;">
                            {!! $post->summary !!}
                            {{-- Mục Tiêu đào Tạo --}}
                            <h2>Mục tiêu đào tạo</h2>
                            <hr>
                            {!! $post->content !!}
                        </div>
                        <br>
                        <div>
                            <h2>Chương Trính Đào Tạo</h2>
                            <hr>
                        </div>
                        <div class="row list-mon-row">
                            <div class="col-md-6 col-xl-4 hihi">
                                <div class="list-mon">
                                    <h3>Mã Môn Học</h3>
                                    <br>
                                    <div class="list-mon__inner">
                                        <ul style="font-size:18px;">
                                            <li>ML113</li><br>
                                            <li>ML114</li><br>
                                            <li>ML115</li><br>
                                            <li>ML202</li><br>
                                            <li>ML204</li><br>
                                            <li>CS101</li><br>
                                            <li>MA101</li><br>
                                            <li>CS100</li><br>
                                            <li>NA151</li><br>
                                            <li>EC102</li><br>
                                            <li>VL101</li><br>
                                            <li>SH131</li><br>
                                            <li>GE101</li><br>
                                            <li>GE102</li><br>
                                            <li>GE103</li><br>
                                            <li>GE201</li><br>
                                            <li>GE202</li><br>
                                            <li>GE205</li><br>
                                            <li>GE301</li><br>
                                            <li>GE303</li><br>
                                            <li>GE305</li><br>
                                            <li>GF101</li><br>
                                            <li>GF102</li><br>
                                            <li>GJ101</li><br>
                                            <li>GJ102</li><br>
                                            <li>GZ101</li><br>
                                            <li>GZ102</li><br>
                                            <li>GI101</li><br>
                                            <li>GI102</li><br>
                                            <li>GK101</li><br>
                                            <li>GK102</li><br>
                                            <li>PG100</li><br>
                                            <li>PG121</li><br>

                                        </ul>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4 hihi">
                                <div class="list-mon">
                                    <h3>Tên Học Phần</h3><br>
                                    <div class="list-mon__inner">

                                        <ul style="font-size:18px;">
                                            <li>Triết học Mác -Lênin</li><br>
                                            <li>Kinh tế chính trị Mác -Lênin</li><br>
                                            <li>Chủ nghĩa xã hội khoa học</li><br>
                                            <li>Tư tưởng Hồ Chí Minh</li><br>
                                            <li>Lịch sửĐảng Cộng sảnViệt Nam</li><br>
                                            <li>Công dân số</li><br>
                                            <li>Logic, suy luận toán học và kỹ thuật đếm</li><br>
                                            <li>Tin đại cương</li><br>
                                            <li></li><br>
                                            <li></li><br>
                                            <li></li><br>
                                            <li></li><br>
                                            <li></li><br>
                                            <li></li><br>
                                            <li></li><br>
                                            <li></li><br>
                                            <li></li><br>
                                            <li></li><br>
                                            <li></li><br>
                                            <li></li><br>
                                            <li></li><br>
                                            <li></li><br>
                                            <li></li><br>
                                            <li></li><br>
                                            <li></li><br>
                                            <li></li><br>
                                            <li></li><br>
                                            <li></li><br>
                                            <li></li><br>
                                            <li></li><br>
                                            <li></li><br>
                                            <li></li><br>
                                            <li></li><br>
                                            <li></li><br>
                                            <li></li><br>
                                            <li></li><br>
                                            <li></li><br>
                                            <li></li><br>
                                            <li></li><br>
                                            <li></li><br>
                                            <li></li><br>
                                            <li></li><br>
                                            <li></li><br>
                                            <li></li><br>
                                        </ul>

                                        <h4>Ngân hàng</h4>
                                        <br>
                                        <ul style="font-size:18px;">
                                            <li>Ngân hàng thương mại</li><br>
                                            <li>Ngân hàng trung tâm</li><br>
                                            <li>Ngân hàng phát triển</li><br>
                                            <li>Thanh toán quốc tế</li><br>
                                            <li>Quản trị rủi ro ứng dụng</li><br>
                                            <li>Marketing ngân hàng</li><br>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4 hihi">
                                <div class="list-mon">
                                    <h3>Môn tự chọn</h3>
                                    <br>
                                    <div class="list-mon__inner">
                                        <ul style="font-size:18px;">
                                            <li>Soạn thảo văn bản</li><br>
                                            <li>Ứng dụng Excel</li><br>
                                            <li>Ứng dụng powerpoint</li><br>
                                            <li>Công nghệ thông tin ngân hàng</li><br>
                                            <li>Kỹ năng giao tiếp thuyết trình</li><br>
                                            <li>Kỹ năng đàm phán</li><br>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                            
                        </div>

                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="sidebar-widget">
                            <div class="single-bio">
                                <div class="single-bio-img">
                                    <img src="/upload/images/{{ $post->img }}" />
                                </div>
                                <div class="single-bio-text">
                                    <h1 style="color: ghostwhite;">{!! $post->title !!}</h1>
                                </div>
                                <div class="single-bio-social">
                                    <a class="btn" href="https://www.facebook.com/groups/cnttdhthanglong"><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="btn" href="https://www.youtube.com/c/ThangLongUniversity"><i
                                            class="fab fa-youtube"></i></a>
                                    <a class="btn" href="https://www.instagram.com/thanglonguniversity/"><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="sidebar-widget">
                            <div class="search-widget">
                                <form>
                                    <input class="form-control" type="text" placeholder="Search Keyword">
                                    <button class="btn"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>

                        <div class="sidebar-widget">
                            <h2 class="widget-title">Điểm trúng tuyển gần nhất</h2>
                            <div class="text-widget">
                                <p>
                                    <li>Năm 2020 điểm trúng tuyển 20.00</li>
                                    <li>Năm 2019 điểm trúng tuyển 16.00</li>
                                    <li>Năm 2020 điểm trúng tuyển 15.00</li>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>




            </div>

        </div>

    </div>
    <!-- Single Post End-->
@endsection
@section('slide')
    {{-- @include('index_Chuan.Layout.slide') --}}
@endsection
