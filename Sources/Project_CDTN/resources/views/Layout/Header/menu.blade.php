<div class="nav-bar">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">

            <ul class="nav">
                <li><a href="{{route('index')}}">Trang Chủ</a></li>
                <li>
                  <a href="#">Thông Tin Chung</a>
                  <ul class="sub-menu">
                     <li><a href="#">Đào Tạo</a>
                        <ul class="sub-menu">
                          {{-- Khoa Toán Tin --}}
                          <span class="f-title">Khoa Bộ Môn</span>
                            <li>
                              <a href="#">Khoa Toán-Tin Học</a>
                              <ul class="sub-menu">
                                <span class="f-title">Nghành Học</span>
                                <li><a href="#">Khoa Học Máy Tính</a></li>
                                <li><a href="#">Toán Ứng Dụng</a></li>
                                <li><a href="#">Mạng Máy Tính & Truyền Thông Dữ Liệu</a></li>
                                <li><a href="#">Hệ Thống Thông Tin</a></li>
                                <li><a href="#">Trí Tuệ Nhân Tạo</a></li>
                                <li><a href="#">Công Nghệ Thông Tin</a></li>
                              </ul>
                            </li>
                            {{-- Khoa Kinh Tế Quản Lý --}}
                            <li>
                              <a href="#">Khoa Kinh Tế-Quản Lý</a>
                              <ul class="sub-menu">
                                <span class="f-title">Nghành Học</span>
                                <li><a href="#">Kế Toán</a></li>
                                <li><a href="#">Tài Chính Ngân Hàng</a></li>
                                <li><a href="#">Quản Trị Kinh Doanh</a></li>
                                <li><a href="#">Maketing</a></li>
                                <li><a href="#">Logitics & Quản Lý Chuỗi Cung Ứng</a></li>
                                <li><a href="#">Luật Kinh Tế</a></li>
                                <li><a href="#">Kinh Tế Quốc Tế</a></li>
                              </ul>
                            </li>
                            {{-- Khoa Khoa Học & Sức Khoẻ --}}
                            <li>
                              <a href="#">Khoa Khoa Học & Sức Khoẻ</a>
                              <ul class="sub-menu">
                                <span class="f-title">Nghành Học</span>
                                <li><a href="#">Điều Dưỡng</a></li>
                                <li><a href="#">Dinh Dưỡng</a></li>
                              </ul>
                            </li>
                            {{-- Khoa Ngoại Ngữ --}}
                            <li>
                              <a href="#">Khoa Khoa Học & Sức Khoẻ</a>
                              <ul class="sub-menu">
                                <span class="f-title">Nghành Học</span>
                                <li><a href="#">Ngôn Ngữ Anh</a></li>
                                <li><a href="#">Ngôn Ngữ Nhật</a></li>
                                <li><a href="#">Ngôn Ngữ Trung Quốc</a></li>
                                <li><a href="#">Ngôn Ngữ Hàn Quốc</a></li>
                              </ul>
                            </li>
                            {{-- Khoa Khoa Học Xã Hội & Nhân Văn --}}
                            <li>
                              <a href="#">Khoa Khoa Học Xã Hội & Nhân Văn</a>
                              <ul class="sub-menu">
                                <span class="f-title">Nghành Học</span>
                                <li><a href="#">Việt Nam Học</a></li>
                                <li><a href="#">Công Tác Xã Hội</a></li>
                              </ul>
                            </li>
                            {{-- Khoa Du Lịch --}}
                            <li>
                              <a href="#">Khoa Du Lịch</a>
                              <ul class="sub-menu">
                                <span class="f-title">Nghành Học</span>
                                <li><a href="#">Quản Trị & Du Lịc-Lữ Hành</a></li>
                              </ul>
                            </li>
                            {{-- Khoa Âm Nhạc Ứng Dụng --}}
                            <li>
                              <a href="#">Khoa Âm Nhạc Ứng Dụng</a>
                              <ul class="sub-menu">
                                <span class="f-title">Nghành Học</span>
                                <li><a href="#">Thanh Nhạc</a></li>
                              </ul>
                            </li>
                        </ul>
                    </li>
                    {{--Tuyển Sinh--}}
                     <li>
                        <a href="#">Tuyển Sinh</a>
                        <ul class="sub-menu">
                            <li>
                              <a href="#">Tuyển Sinh Đại Học Chính Quy</a>
                              {{-- <ul class="sub-menu">
                                <li><a href="#">level 3</a></li>
                              </ul> --}}
                            </li>
                            <li><a href="#">Tuyển Sinh Đào Tạo Thạc Sĩ</a></li>
                            <li><a href="#">Tuyển Sinh Đào Tạo Thạc Sĩ quốc tế</a></li>
                            <li><a href="#">Tuyển Sinh Đào Tạo Liên Thông</a></li>
                        </ul>
                     </li>
                     <li><a href="#">Sự Kiện</a></li>
                     <li><a href="#">Học Bổng</a></li>
                  </ul>
                </li>
                    {{--Sinh Viên--}}
                <li>
                  <a href="#">Sinh Viên</a>
                  <ul class="sub-menu">
                    <li><a href="#">Tra Cứu Kết Quả Học Tập</a></li>
                    <li>
                      <a href="#">Xem Thông Báo</a>
                      <ul class="sub-menu">
                        <li><a href="#">Đào Tạo</a></li>
                        <li><a href="#">Học Phí</a></li>
                        <li><a href="#">Bảo Hiểm</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Xem Bài Đăng Tuyển Dụng</a></li>
                  </ul>
                </li>
                      {{--Giảng Viên--}}
                <li>
                  <a href="#">Giảng Viên</a>
                  <ul class="sub-menu">
                    <li><a href="#">Tra Cứu Bảng Lương</a></li>
                    <li>
                      <a href="#">Xem Thông Báo</a>
                      <ul class="sub-menu">
                        <li><a href="#">Đào Tạo</a></li>
                        <li><a href="#">Học Phí</a></li>
                        <li><a href="#">Bảo Hiểm</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                    {{--Cựu Sinh Viên--}}
                <li>
                  <a href="#">Cựu Sinh Viên & Doanh Nghiệp</a>
                  <ul class="sub-menu">
                    <li><a href="#">Thêm Bài Tuyển Dụng</a></li>  
                  </ul>  
                </li>
                
                {{--Phụ Huynh--}}
                <li>
                  <a href="#">Phụ Huynh</a>
                  <ul class="sub-menu">
                    <li><a href="#">Tra Cứu Điểm</a></li>
                  </ul>
                </li>
             </ul>    

            <div class="ml-auto">
                <a class="btn btn-custom" href="{{route('login')}}">Login</a>
            </div>
        </nav>
    </div>
</div>