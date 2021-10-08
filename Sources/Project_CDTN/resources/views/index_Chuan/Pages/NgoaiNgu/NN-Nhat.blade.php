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
                        <h1>Ngành Ngôn ngữ Nhật</h1>
                       <hr>
                        <p>
                            Trong những năm gần đây, mối quan hệ giữa Nhật Bản và Việt Nam đang ở giai đoạn rất tốt đẹp. Về
                            lĩnh vực chính trị, ngoại giao; việc nới lỏng việc nhập cảnh cho Việt Nam đã mang đến nhiều cơ
                            hội du học, thực tập, làm việc tại Nhật Bản cho chúng ta. Về lĩnh vực kinh tế, cùng với việc mở
                            rộng đầu tư của các công ty Nhật Bản tại Việt Nam, cơ hội làm việc tại các công ty Nhật Bản ngày
                            càng nhiều hơn. Việc cung cấp chương trình đào tạo tiếng Nhật có chất lượng cao, được thực hành
                            tiếng với giảng viên bản ngữ, gắn đào tạo với ứng dụng ngày càng trở nên quan trọng đối với
                            những người học tiếng Nhật giúp họ đạt được các mục tiêu khác nhau.
                        </p>
                        {{-- Mục Tiêu đào Tạo --}}
                        <h2>Mục tiêu đào tạo</h2>
                        <hr>
                        <p>
                            Chương trình đào tạo ngành Ngôn ngữ Nhật của Đại học Thăng Long cung cấp kiến thức cơ bản về
                            kinh tế-xã hội; kiến thức sâu rộng về tiếng Nhật và sử dụng thành thạo tiếng Nhật (tương đương
                            cấp độ N2, tức bậc 4/5 theo Chuẩn đánh giá năng lực tiếng Nhật của chính phủ Nhật Bản). Chương
                            trình đào tạo ngành Ngôn ngữ Nhật gồm 3 định hướng: Tiếng Nhật giáo dục, Ngôn ngữ và Văn hoá
                            Nhật, Tiếng Nhật doanh nghiệp. Sinh viên tốt nghiệp đạt chuẩn đầu ra về tin học, tiếng Anh của
                            trường Đại học Thăng Long, được trang bị đầy đủ kiến thức chuyên môn, nghiệp vụ; năng lực
                            thực hành nghề vững vàng, sử dụng tiếng Nhật thành thạo, đáp ứng được nhu cầu của thị
                            trường lao động và hội nhập.
                        </p>
                        <br>
                        {{-- Sự nghiệp tương lai --}}
                        <h2>Sự nghiệp tương lai</h2>
                        <hr>
                        <p>
                            Đảm nhiệm công việc giảng dạy, biên-phiên dịch, nghiên cứu và các công việc khác tại các cơ sở
                            đào tạo, cơ quan, viện nghiên cứu, các đơn vị doanh nghiệp sản xuất, kinh doanh, dịch vụ…trong
                            và ngoài nước.


                        </p>

                        <br><br>
                        <h2>Chương Trình Đào Tạo</h2>
                        <hr>
                        <div class="row">
                            <div class="col-md-6 col-xl-4">
                                <div class="list-mon">
                                    <h5>Môn Cơ Sở</h5><br>
                                    <div class="list-mon__inner">
                                        <ul>
                                            <li>Tiếng Nhật trung cấp</li><br>
                                            <li>Tiếng Nhật cao cấp</li><br>
                                            <li>Bổ trợ ký năng Tiếng Nhật trung cấp</li><br>
                                            <li>Bổ trợ ký năng Tiếng Nhật cao cấp</li><br>
                                            <li>Văn hóa Nhật Bản</li><br>
                                            <li>Ngữ pháp tiếng Nhật</li><br>
                                            <li>Đất nước học Nhật Bản</li><br>
                                            <li>Văn bản tiếng Nhật</li><br>
                                            <li>Văn học Nhật Bản</li><br>
                                            <li>Dịch viết</li><br>
                                            <li>Dịch nói</li><br>
                                            <li>Kỹ năng giao tiếp tiếng Nhật
                                                <br>
                                                &nbsp;
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-4">
                                <div class="list-mon">
                                    <h5>Môn Chuyên Nghành</h5><br>
                                    <div class="list-mon__inner">
                                        <ul>
                                            <li><b>Tiếng Nhật giáo dục</b></li><br>
                                            <li>Định hướng tiếng Anh doanh nghiệp</li><br>
                                            <li>Ngữ âm học tiếng Nhật</li><br>
                                            <li>Từ vựng học tiếng Nhật</li><br>
                                            <li>Ngữ dụng học tiếng Nhật</li><br>
                                            <li>Kỹ thuật giảng dạy tiếng Nhật</li><br>
                                            <li>Giảng dạy tiếng Nhật</li><br><br>
                                            <li><b>Ngôn ngữ và Văn hóa Nhật</b></li><br>
                                            <li>Ngữ âm học tiếng Nhật</li><br>
                                            <li>Từ vựng học tiếng Nhật</li><br>
                                            <li>Ngữ dụng học tiếng Nhật</li><br>
                                            <li>Văn minh Nhật Bản</li><br>
                                            <li>Lịch sử Nhật Bản</li><br>
                                            <li>Văn hóa Nhật Bản</li><br><br>
                                            <li><b>Tiếng Nhật doanh nghiệp</b></li><br>
                                            <li>Tiếng Nhật giao tiếp doanh nghiệp</li><br>
                                            <li>Tiếng Nhật kế toán</li><br>
                                            <li>Tiếng Nhật Marketing</li><br>
                                            <li>Tiếng Nhật kinh tế</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-4">
                                <div class="list-mon">
                                    <h5>Môn tự chọn</h5><br>
                                    <div class="list-mon__inner">
                                        <ul>
                                            <li>Văn học Nhật Bản</li><br>
                                            <li>Giáo dục Nhật Bản</li><br>
                                            <li>Tiếng Nhật IT</li><br>
                                            <li>Tiếng Nhật văn phòng</li><br>
                                            <li>Tiếng Nhật y tế</li><br>
                                            <li>Phương pháp giảng dạy chữ Hán</li><br>
                                            <li>Tiếng Nhật du lịch và khách sạn</li><br>
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
                                    <img src="{{ asset('asset/img/ThangLong.jpg') }}" />
                                </div>
                                <div class="single-bio-text">
                                    <h3>Mã nghành 7480104</h3>
                                    <p>
                                        Thời gian học <b>4 năm</b>
                                    </p>

                                    <p>
                                        Tổ hợp môn thi <b>D01</b>
                                    </p>
                                    <p>
                                        Học phí <b>24.200.000vnđ/năm</b>
                                    </p>
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
                            <h2 class="widget-title">Khoa Ngoại Ngữ</h2>
                            <div class="category-widget">
                                <ul>
                                    <li><a href="{{ route('ANH') }}">Ngôn Ngữ Anh</a></li>
                                    <li><a href="{{ route('NHAT') }}">Ngôn Ngữ Nhật</a></li>
                                    <li><a href="{{ route('HAN') }}">Ngôn Ngữ Hàn</a></li>
                                    <li><a href="{{ route('TQ') }}">Ngôn Ngữ Trung Quốc</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="sidebar-widget">
                            <h2 class="widget-title">Điểm trúng tuyển gần nhất</h2>
                            <div class="text-widget">
                                <p>
                                    <li>Năm 2020 điểm trúng tuyển 15.00</li>
                                    {{-- <li>Năm 2019 điểm trúng tuyển 16.00</li>
                                    <li>Năm 2020 điểm trúng tuyển 15.00</li> --}}
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
    @include('index_Chuan.Layout.slide')
@endsection
