
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
                    <h1 >Ngành Khoa học máy tính</h1>
                    <hr>
                    <p>
                        Khoa học máy tính là ngành học đóng vai trò rất quan trọng trong nghiên cứu và giải quyết các
                        vấn đề lý luận cũng như các kỹ thuật nền tảng của CNTT và truyền thông. Ngành học này nghiên cứu
                        những kiến thức cơ bản trong tin học nhằm mục đích áp dụng các thuật toán và toán học vào các
                        bài
                        toán trong thực tế. Cụ thể, những vấn đề được ngành học quan tâm nghiên cứu như: Nguyên lý làm
                        việc
                        của máy tính, biểu diễn cấu trúc của dữ liệu trong máy tính cùng các lý thuyết cơ bản trong lĩnh
                        vực
                        tin học, .v.v. Các vấn đề này là cơ sở cho các ngành công nghệ thông tin – truyền thông khác.
                    </p>
                    <p>
                        Cử nhân khoa học máy tính là những người có hiểu biết rất cơ bản về các vấn đề nêu ở trên. Với
                        kiến thức
                        nền tảng của ngành học này, họ có đầy đủ tri thức để có thể tham gia nhiều mảng trong lĩnh vực
                        tin học
                        như nghiên cứu chuyên sâu, trở thành những nhà phát triển ứng dụng phần mềm chuyên nghiệp, những
                        nhà phát
                        triển các ứng dụng trí tuệ nhân tạo cũng như kiến trúc sư trưởng về hệ thống công nghệ thông tin
                        và truyền thông, .v.v.
                    </p>
                    <p>
                        Cử nhân khoa học máy tính do vậy là những người có kiến thức chuyên sâu và khả năng phân tích
                        giải quyết vấn đề trong tin
                        học một cách cơ bản. Họ có tư duy sâu sắc về hoạt động của máy tính, bao gồm cả phần cứng lẫn
                        phần mềm, họ có khả năng
                        tạo ra các sản phẩm phần mềm đáp ứng nhu cầu của thị trường một cách chuyên nghiệp.
                    </p>
                    <h2>Mục tiêu đào tạo</h2>
                    <hr>
                    <p>
                        Sau khi tốt nghiệp ngành Khoa học máy tính, sinh viên sẽ đạt được những yêu cầu sau:
                    </p>
                    <p>
                        Nắm vững các nguyên lý và lý luận về tính toán bên trong máy tính; Biểu diễn, quản lý dữ
                        liệu và tri thức trong máy tính; Biết phân tích và thiết kế thuật toán để áp dụng vào các
                        bài toán thực tế; Có hiểu biết sâu sắc về một số lĩnh vực trong tin học để có thể đưa ra giải
                        pháp giải quyết vấn đề tốt nhất.
                    </p>
                    <p>
                        Nắm vững một số ngôn ngữ lập trình phổ biến và hiện đại; Có kỹ năng lập trình vững vàng để giải
                        quyết một vấn đề cụ thể; Có khả năng tư duy tự học các công nghệ mới, các công cụ mới liên quan
                        đến lĩnh vực lập trình.
                    </p>
                    <p>
                        Nắm bắt và vận dụng được các công cụ phát triển phần mềm để xây dựng được các sản phẩm phần mềm
                        theo mô hình công nghiệp hiện đại và phù hợp với xu thế.
                    </p>
                    <p>
                        Có khả năng tiếp cận các vấn đề liên quan đến trí tuệ nhân tạo theo cả hướng nghiên cứu chuyên
                        sâu và ứng dụng trong cuộc sống.
                    </p>
                    <p>
                        Có đầy đủ tri thức để trở thành một kiến trúc sư trưởng về hệ thống thông tin: Tích hợp hệ
                        thống, chuẩn hóa thông tin, xây dựng quy trình tổng thể cho hoạt động của doanh nghiệp hay tổ
                        chức trên nền tảng sử dụng các yếu tố công nghệ thông tin.
                    <p>
                        Thiết lập cũng như lập trình các hệ thống liên quan đến mạng máy tính: Giao tiếp từ xa, hội thảo
                        trực tuyến, .v.v
                    </p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="sidebar">
                    <div class="sidebar-widget">
                        <div class="single-bio">
                            <div class="single-bio-img">
                                <img src="{{asset('asset/img/toantin.jpg')}}" />
                            </div>
                            <div class="single-bio-text">
                                <h3>Mã nghành 7340201</h3>
                                <p>
                                    Thời gian học <b>4 năm</b>
                                </p>

                                <p>
                                    Tổ hợp môn thi <b>A00,A01</b>
                                </p>
                                <p>
                                    Học phí <b>24.200.000vnđ/năm</b>
                                </p>
                            </div>
                            <div class="single-bio-social">
                                <a class="btn" href="https://www.facebook.com/groups/cnttdhthanglong"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn" href="https://www.youtube.com/c/ThangLongUniversity"><i class="fab fa-youtube"></i></a>
                                <a class="btn" href="https://www.instagram.com/thanglonguniversity/"><i class="fab fa-instagram"></i></a>
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
                        <h2 class="widget-title">Khoa Toán - Tin Học</h2>
                        <div class="category-widget">
                            <ul>
                                <li><a href="">Ngành Trí tuệ nhân tạo</a></li>
                                <li><a href="">Ngành Khoa học máy tính</a></li>
                                <li><a href="">Ngành Mạng máy tính và truyền thông dữ liệu</a></li>
                                <li><a href="">Ngành Hệ thống thông tin</a></li>
                                <li><a href="">Ngành công nghệ thông tin</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="sidebar-widget">
                        <h2 class="widget-title">Text Widget</h2>
                        <div class="text-widget">
                            <p>
                                Lorem ipsum dolor sit amet elit. Integer lorem augue purus mollis sapien, non eros
                                leo in nunc. Donec a nulla vel turpis tempor ac vel justo. In hac platea nec eros.
                                Nunc eu enim non turpis id augue.
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