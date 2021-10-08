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
                        <h1>Ngành Kế toán</h1>
                        <hr>
                        <p>
                            Chương trình đào tạo cử nhân kế toán là một trong số ngành được đào tạo đầu tiên tại Đại học
                            Thăng Long về khối ngành Kinh tế - Quản lý. Với 18 khóa sinh viên đã tốt nghiệp và 22 năm kinh
                            nghiệm đào tạo, nội dung chương trình đào tạo ngành kế toán được cập nhật theo các qui định mới
                            nhất về tài chính, kế toán, được điều chỉnh phù hợp với yêu cầu thị trường lao động theo hướng
                            tăng tính thực hành. Do vậy, sinh viên tốt nghiệp ngành kế toán đều được các nhà tuyển dụng đánh
                            giá cao về kiến thức chuyên môn, thái độ làm việc và các kỹ năng mềm trong công việc. Sinh viên
                            sau khi tốt nghiệp dễ dàng tìm được việc làm theo đúng ngành đào tạo và hòa nhập nhanh với môi
                            trường làm việc.
                        </p>
                        {{-- Mục Tiêu đào Tạo --}}
                        <h2>Mục tiêu đào tạo</h2>
                        <hr>
                        <p>
                            Mục tiêu chung của ngành kế toán là đào tạo nguồn nhân lực chất lượng cao đáp ứng nhu cầu phát
                            triển trong lĩnh vực kế toán của đất nước, có khả năng thích nghi với sự thay đổi nhanh chóng
                            của môi trường kinh doanh.
                        </p>
                        <p>Mục tiêu cụ thể là đào tạo ra các cử nhân ngành kế toán: </p><br>
                        <li> Đào tạo cử nhân kế toán có năng lực về chuyên môn nhằm thực hiện các công tác kế toán, kiểm
                            toán, phân tích tài chính, dự toán trong các tổ chức một cách độc lập.</li>
                        <li>Sinh viên tốt nghiệp có phẩm chất tốt, có ý thức tuân thủ đạo đức nghề nghiệp, qui định pháp
                            luật, có kỹ năng tin học, ngoại ngữ, giao tiếp kinh doanh nhằm thích nghi với sự thay đổi nhanh
                            chóng của môi trường kinh doanh.</li>
                        <li>Sinh viên tốt nghiệp có năng lực học tập suốt đời.</li>
                        <br>
                        {{-- Sự nghiệp tương lai --}}
                        <h2>Sự nghiệp tương lai</h2>
                        <hr>
                        <li>
                            Sinh viên có thể đảm nhiệm các công việc kế toán tại phòng/bộ phận kế toán tài chính trong các
                            doanh nghiệp, tổ chức hành chính sự nghiệp, tổ chức xã hội, đoàn thể…
                        </li><br>
                        <li>Sinh viên có thể thực hiện công việc phân tích tài chính, kế toán, tư vấn thuế, kiểm toán tại
                            các công ty cung cấp dịch vụ kế toán – kiểm toán.</li>
                        <br><br>
                        <h2>Chương Trình Đào Tạo</h2>
                        <hr>
                        <div class="row">
                            <div class="col-md-6 col-xl-4">
                                <div class="list-mon">
                                    <h5>Môn Cơ Sở</h5><br>
                                    <div class="list-mon__inner">
                                        <ul>
                                            <li>Phương pháp nghiên cứu khoa học trong kinh tế</li><br>
                                            <li>Đại số tuyến tính, giải tích và ứng dụng trong kinh tế</li><br>
                                            <li>Xác suất thống kê ứng dụng </li><br>
                                            <li>Ứng dụng Excel </li><br>
                                            <li>Kinh tế vi mô </li><br>
                                            <li>Kinh tế vĩ mô </li><br>
                                            <li>Các phương pháp phân tích định lượng trong kinh tế</li><br>
                                            <li>Tài chính tiền tệ căn bản</li><br>
                                            <li>Tài chính doanh nghiệp </li><br>
                                            <li>Nguyên lý kế toán</li><br>
                                            <li>Quản trị học đại cương</li><br>
                                            <li>Marketing căn bản 
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
                                            <li>Quản trị tài chính doanh nghiệp 1</li><br>
                                            <li>Thuế</li><br>
                                            <li>Kế toán tài chính 1</li><br>
                                            <li>Kế toán tài chính 2</li><br>
                                            <li>Kế toán máy</li><br>
                                            <li>Kế toán công</li><br>
                                            <li>Tổ chức hạch toán kế toán </li><br>
                                            <li>Kế toán quốc tế 1</li><br>
                                            <li>Kế toán quốc tế 2</li><br>
                                            <li>Kế toán công ty</li><br>
                                            <li>Kế toán quản trị </li><br>
                                            <li>Lý thuyết kiểm toán </li><br>
                                            <li>Kiểm toán báo cáo tài chính 1</li><br>
                                            <li>Kế toán tài chính 3</li><br>
                                            <li>Lập và phân tích báo cáo tài chính </li><br>
                                            <li>Kiểm toán báo cáo tài chính 2</li><br>
                                            <li>Kiểm soát quản lý</li><br>
                                            <li>Ngân hàng thương mại 1 </li><br>
                                            <li>Kế toán ngân hàng  </li><br>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-4">
                                <div class="list-mon">
                                    <h5>Môn tự chọn</h5><br>
                                    <div class="list-mon__inner">
                                        <ul>
                                            <li>Khởi sự kinh doanh</li><br>
                                            <li>Công nghệ thông tin trong doanh nghiệp</li><br>
                                            <li>Kinh tế quốc tế</li><br>
                                            <li>Tài chính công</li><br>
                                            <li>Đầu tư chứng khoán</li><br>
                                            <li>Phân tích hoạt động kinh doanh</li><br>
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
                                        Tổ hợp môn thi <b>A00, A01, D01, D03</b>
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
                                    <li><a href="{{ route('Kinhte') }}">Kinh Tế</a></li>
                                    <li><a href="{{ route('KT_quocte') }}">Kinh Tế Quốc Tế</a></li>
                                    <li><a href="{{ route('Marketing') }}">Marketing</a></li>
                                    <li><a href="{{ route('TC_nganhang') }}">Tài Chính Ngân Hàng</a></li>
                                    <li><a href="{{ route('QT_kinhdoanh') }}">Quản Trị Kinh Doanh</a></li>
                                    <li><a href="{{ route('LOGITICS') }}">Ngành Logistics và Quản lí chuỗi cung ứng</a></li>
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
