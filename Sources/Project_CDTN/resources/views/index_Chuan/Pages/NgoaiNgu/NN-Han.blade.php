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
                        <h1>Ngành Ngôn ngữ Hàn Quốc</h1>
                        <hr>
                        <p>
                            Chương trình đào tạo (CTĐT) ngành Ngôn ngữ Hàn Quốc được xây dựng năm 2016, luôn được điều chỉnh
                            và cập nhật để phù hợp với tình hình phát triển của xã hội.
                            Chương trình được tích hợp các học phần thực hành tiếng và học phần lí thuyết. Các học phần này
                            không những cung cấp kiến thức về tiếng Hàn mà còn giúp sinh viên hiểu biết về văn hoá, lịch sử,
                            con người Hàn Quốc. Ngoài ra, một số học phần được xây dựng bám sát định hướng ứng dụng liên
                            quan đến kinh tế, du lịch v.v giúp sinh viên định hướng nghề trước khi ra trường.
                        </p>
                        {{-- Mục Tiêu đào Tạo --}}
                        <h2>Mục tiêu đào tạo</h2>
                        <hr>
                        <p>
                            Mục tiêu của Chương trình cử nhân ngành ngôn ngữ Hàn Quốc là đào tạo ra nguồn nhân lực
                            biên-phiên dịch chất lượng cao, sử dụng thành thạo tiếng Hàn, có kiến thức tổng quan về lịch sử,
                            văn hoá, đất nước và con người Hàn Quốc; có khả năng tư duy, linh hoạt, sáng tạo, năng lực tổ
                            chức, năng lực làm việc nhóm; có thể sử dụng tiếng Hàn như một nghề nghiệp hoặc như một công cụ
                            để học tập và nghiên cứu các chuyên ngành khác. Sinh viên tốt nghiệp có thể tiếp tục tự học, học
                            ở bậc cao hơn, có thể trở thành chuyên gia trong lĩnh vực chuyên môn của mình; đóng vai trò như
                            một cầu nối thúc đẩy mối quan hệ giữa Việt Nam và Hàn Quốc; có trình độ và ý thức của một công
                            dân toàn cầu.
                        </p>
                        <br>
                        {{-- Sự nghiệp tương lai --}}
                        <h2>Sự nghiệp tương lai</h2>
                        <hr>
                        <p>
                            Sau khi tốt nghiệp, cử nhân ngành tiếng Hàn có thể đảm nhận những vị trí công tác dưới đây:
                        </p>
                        <li>Biên dịch viên, phiên dịch viên, biên tập viên, cộng tác viên, nhân viên văn phòng, trợ lí, thư
                            kí, hướng dẫn viên du lịch v.v…</li>
                        <li>Giáo viên, nghiên cứu viên: </li>
                        <li>Có thể dạy tiếng Hàn cho đối tượng là người Việt Nam trong các cơ sở đào tạo trong và ngoài
                            nước; có thể dạy tiếng Hàn trong các trường phổ thông tại Việt Nam trong tương lai. </li>
                        <li>Có khả năng làm việc trong các trung tâm, cơ quan, viện  nghiên cứu về Hàn Quốc học trong và ngoài nước.</li>
                        <br><br>
                        <h2>Chương Trình Đào Tạo</h2>
                        <hr>
                        <div class="row">
                            <div class="col-md-6 col-xl-4">
                                <div class="list-mon">
                                    <h5>Môn Cơ Sở</h5><br>
                                    <div class="list-mon__inner">
                                        <ul>
                                            <li>Tiếng Hàn trung cấp 1 </li><br>
                                            <li>Tiếng Hàn trung cấp 2 </li><br>
                                            <li>Kỹ năng Nghe, nói, đọc, viết Hàn 3</li><br>
                                            <li>Kỹ năng Nghe, nói, đọc, viết Hàn 4</li><br>
                                            <li>Kỹ năng Nghe, nói, đọc, viết Hàn 5</li><br>
                                            <li>Kỹ năng Nghe, nói, đọc, viết Hàn 6</li><br>
                                            <li>Lý thuyết Dịch</li><br>
                                            <li>Dịch viết 1 </li><br>
                                            <li>Dịch nói 1</li><br>
                                            <li>Dịch viết 2</li><br>
                                            <li>Dịch nói 2</li><br>
                                            <li>Đất nước học Hàn Quốc </li><br>
                                            <li>Văn học Hàn Quốc</li><br>
                                            <li>Tiếng Anh trung cấp nâng cao 1</li><br>
                                            <li>Tiếng Anh trung cấp nâng cao 2</li><br>
                                            <li>Ngôn ngữ học đại cương </li><br>
                                            <li>Văn hóa Việt Nam </li><br>
                                            <li>Thống kê xã hội học 
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
                                            <li>Ngữ âm và từ vựng tiếng Hàn</li><br>
                                            <li>Ngữ pháp tiếng Hàn</li><br>
                                            <li>Tiếng Hàn cao cấp 1</li><br>
                                            <li>Tiếng Hàn cao cấp 2</li><br>
                                            <li>Tiếng Hàn cao cấp 3</li><br>
                                            <li>Tiếng Hàn cao cấp 4</li><br>
                                            <li>Dịch viết 3</li><br><br>
                                            <li>Dịch nói 3</li><br>
                                            <li>Tiếng Hàn du lịch </li><br>
                                            <li>Tiếng Hàn kinh tế - thương mại</li><br>
                                            <li>Khóa luận tốt nghiệp </li><br>
                                            <li>Sinh viên không làm khóa luận tốt nghiệp thị học 02 Chuyên đề tốt nghiệp sau: </li><br>
                                            <li>Hoạt động văn hóa – xã hội và kinh tế của người Hàn tại Việt Nam </li><br>
                                            <li>Ý thức của người Hàn trong thành ngữ và tục ngữ Hàn Quốc</li><br><br>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-4">
                                <div class="list-mon">
                                    <h5>Môn tự chọn</h5><br>
                                    <div class="list-mon__inner">
                                        <ul>
                                            <li>Lịch sử Hàn Quốc </li><br>
                                            <li>Kinh tế Hàn Quốc </li><br>
                                            <li>Ngôn ngữ học đối chiếu </li><br>
                                            <li>Thực tập tiếng Hàn </li><br>
                                            <li>Ngôn ngữ và văn hoằng nhật của Hàn Quốc </li><br>
                                            <li>Tiếng Hàn qua phim ảnh</li><br>
                                            <li>Thư tín thương mại Hàn Quốc</li><br>
                                            <li>Chữ Hán trong tiếng Hàn 1</li><br>
                                            <li>Chữ Hán trong tiếng Hàn 2</li><br>
                                            <li>Quản trị nguồn nhân lực</li><br>
                                            <li>Kỹ năng giao tiếp và truyết trình</li><br>
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
