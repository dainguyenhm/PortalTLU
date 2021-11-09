<section class="content">
    <div class="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="{{asset('upload/images/dh-thang-long.jpg')}}" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-header text-left">
                        <p>Giới Thiệu</p>
                        <h1 style="font-family: serif;
                        font-size: 56px;"><b>Đại Học Thăng Long</b></h1>
                    </div>
                    <div class="about-content">
                        <p style="font-size: 19px;">
                            Đại học Thăng Long là một trung tâm giáo dục đa ngành, đa nghề, định hướng ứng dụng; với mô hình đào tạo - học tập cập nhật theo môi trường làm việc thực tế. Với niềm tâm huyết của những nhà thiết kế giáo dục, chúng tôi cam kết xây dựng một môi trường giáo dục tốt nhất, cập nhật nhất dành cho sinh viên.
                        </p>
                        <ul style="font-size: 19px;">
                            <li><a href="{{route('infrastructure')}}" class="far fa-check-circle"> Cơ Sở Vật Chất </a></li>
                            <li><a href="{{route('team')}}" class="far fa-check-circle"> Đội Ngũ Giảng Viên </a></li>
                        </ul>
                        <a class="btn btn-custom" href="{{route('about')}}"> Xem Thêm </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('index_Chuan.Content_index.admissions')
@include('index_Chuan.Content_index.facts')
@include('index_Chuan.Content_index.team')
@include('index_Chuan.Content_index.blog')