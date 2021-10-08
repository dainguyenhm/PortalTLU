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
                        <h1>Ngôn ngữ Anh</h1>
                        <hr>
                        <p>
                            Ngành ngôn ngữ Anh là ngành học giúp sinh viên làm chủ và sử dụng tiếng Anh thành thạo trong
                            nhiều lĩnh vực nghề nghiệp và đời sống hàng ngày. Trong xu thế “đa quốc gia hóa” hiện nay, biết
                            tiếng Anh một cách bài bản là lợi thế rất lớn. Người học sẽ có cơ hội lớn hơn ở những quốc gia
                            phát triển, sự nghiệp sẽ dễ dàng thành công hơn. Theo học ngành ngôn ngữ Anh cũng mang đến cho
                            sinh viên những cơ hội được tiếp cận và nghiên cứu về lý thuyết ngôn ngữ, lịch sử, văn hoá của
                            hai quốc gia bản ngữ tiêu biểu là Anh và Mỹ; được trang bị các kiến thức bổ trợ về kinh tế, tài
                            chính, du lịch, sự kiện, giảng dạy, v.v, để đáp ứng nhu cầu của thị trường việc làm hiện nay.
                            Bằng cấp của ngành Ngôn ngữ Anh giữ nguyên giá trị theo thời gian, sinh viên ngành Ngôn ngữ Anh
                            luôn có “đất dụng võ” trên thị trường lao động toàn cầu.
                        </p>
                        {{-- Mục Tiêu đào Tạo --}}
                        <h2>Mục tiêu đào tạo</h2>
                        <hr>
                        <p>
                            Đào tạo cử nhân ngành Ngôn ngữ Anh có đủ phẩm chất chính trị, đạo đức, kiến thức, kỹ năng, tác
                            phong nghề nghiệp, và khả năng hoà nhập cao để làm việc hiệu quả trong các lĩnh vực chuyên môn
                            có sử dụng tiếng Anh, đáp ứng đòi hỏi của thị trường lao động và nhu cầu hội nhập quốc tế của
                            đất nước. Sinh viên khi tốt nghiệp có kiến thức tốt về tiếng Anh và sử dụng thành thạo tiếng
                            Anh, trình độ đạt bậc 5 theo Khung năng lực ngoại ngữ 6 bậc dành cho Việt Nam (tương đương cấp
                            độ C1 theo Khung tham chiếu năng lực ngoại ngữ chung Châu Âu-CEFR) hoặc đạt tối thiểu 6.5 IELTS
                            quốc tế và các chứng chỉ ngoại ngữ quốc tế tương đương khác) ở cả 4 kỹ năng nghe, nói, đọc,
                            viết.
                        </p>
                        <br>
                        {{-- Sự nghiệp tương lai --}}
                        <h2>Sự nghiệp tương lai</h2>
                        <hr>
                        <p>
                            Sinh viên tốt nghiệp đại học ngành Ngôn ngữ Anh có thể làm việc ở các cơ quan, tổ chức, doanh
                            nghiệp có sử dụng tiếng Anh như biên-phiên dịch viên, giáo viên, thư ký, nhân viên đối ngoại,
                            hợp tác quốc tế, kinh doanh, nhân viên văn phòng, truyền thông, điều phối viên hay khởi nghiệp,
                            tạo dựng và làm chủ doanh nghiệp.
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
                                            <li>Ngôn ngữ học Đại cương</li><br>
                                            <li>Văn hoá Việt Nam</li><br>
                                            <li>Tiếng Anh cơ sở 1,2,3</li><br>
                                            <li>Phát âm, thực hành từ vựng và cấu trúc tiếng Anh 1,2</li><br>
                                            <li>Ngoại ngữ 2</li><br>
                                            <li>Kỹ năng nghe, nói, đọc, viết tiếng Anh 1,2,3</li><br>
                                            <li>Tiếng Anh cao cấp</li><br>
                                            <li>Ngữ pháp, ngữ âm và âm vị học, ngữ nghĩa học từ vựng</li><br>
                                            <li>Lý thuyết dịch, dịch viết 1, dịch nói 1</li><br>
                                            <li>Đất nước học Anh Mỹ</li><br>
                                           <li>Phương pháp nghiên cứu trong ngôn ngữ học ứng dụng
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
                                            <li>Định hướng tiếng Anh doanh nghiệp</li><br>
                                            <li>Quản trị học đại cương</li><br>
                                            <li>Thư tín thương mại</li><br>
                                            <li>Tiếng Anh kinh tế</li><br>
                                            <li>Nhập môn kinh tế quốc tế</li><br>
                                            <li>Quản trị nguồn nhân lực</li><br>
                                            <li>Nhập môn marketing</li><br>
                                            <li>Thực tập tốt nghiệp</li><br>
                                            <li>Định hướng tiếng Anh sư phạm</li><br>
                                            <li>Tâm lý học sư phạm</li><br>
                                            <li>Phương pháp giảng dạy ngoại ngữ 1,2</li><br>
                                            <li>Thiết kế giáo án và phát triển tài liệu</li><br>
                                            <li>Kiểm tra và đánh giá</li><br>
                                            <li>Văn học Anh Mỹ</li><br>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-4">
                                <div class="list-mon">
                                    <h5>Môn tự chọn</h5><br>
                                    <div class="list-mon__inner">
                                        <ul>
                                            <li>Tài chính doanh nghiệp </li><br>
                                            <li>Văn hóa doanh nghiệp và đạo đức kinh doanh</li><br>
                                            <li>Dịch viết 2, Dịch nói 2</li><br>
                                            <li>Tiếng Anh toàn cầu</li><br>
                                            <li>Tiếng Anh báo chí</li><br>
                                            <li>Tiếng Anh du lịch</li><br>
                                            <li>Ngôn ngữ học đối chiếu</li><br>
                                            <li>Ngữ dụng</li><br>
                                            <li>Phân tích diễn ngôn</li><br>
                                            <li>Cú pháp - hình thái học</li><br>
                                            <li>Giao tiếp giữa các nền văn hoá </li><br>
                                            <li>Ngôn ngữ và văn hoá</li><br>
                                            <li>Sử dụng tài nguyên trong giảng dạy tiếng Anh</li><br>
                                            <li>Giảng dạy tiếng Anh chuyên ngành</li><br>
                                            <li>Tư duy phản biện</li>
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
