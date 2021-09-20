<div class="nav-bar">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">

            <ul class="nav">
                <li><a href="<?php echo e(route('index')); ?>">Trang Chủ</a></li>
                <li>
                    <a href="#">Thông Tin Chung</a>
                    <ul class="sub-menu">
                        <li><a href="#">Đào Tạo</a>
                            <ul class="sub-menu">
                                
                                <span class="f-title">Khoa Bộ Môn</span>
                                <li>
                                    <a href="#">Khoa Toán-Tin Học</a>
                                    <ul class="sub-menu">
                                        <span class="f-title">Nghành Học</span>
                                        <li><a href="<?php echo e(route('KH_maytinh')); ?>">Khoa Học Máy Tính</a></li>
                                        <li><a href="<?php echo e(route('Toan_ungdung')); ?>">Toán Ứng Dụng</a></li>
                                        <li><a href="<?php echo e(route('Mang_maytinh')); ?>">Mạng Máy Tính & Truyền Thông Dữ Liệu</a></li>
                                        <li><a href="<?php echo e(route('HT_thongtin')); ?>">Hệ Thống Thông Tin</a></li>
                                        <li><a href="<?php echo e(route('TT_nhantao')); ?>">Trí Tuệ Nhân Tạo</a></li>
                                        <li><a href="<?php echo e(route('CN_thongtin')); ?>">Công Nghệ Thông Tin</a></li>
                                    </ul>
                                </li>
                                
                                <li>
                                    <a href="#">Khoa Kinh Tế-Quản Lý</a>
                                    <ul class="sub-menu">
                                        <span class="f-title">Nghành Học</span>
                                        <li><a href="<?php echo e(route('Kinhte')); ?>">Kế Toán</a></li>
                                        <li><a href="<?php echo e(route('TC_nganhang')); ?>">Tài Chính Ngân Hàng</a></li>
                                        <li><a href="<?php echo e(route('QT_kinhdoanh')); ?>">Quản Trị Kinh Doanh</a></li>
                                        <li><a href="<?php echo e(route('Marketing')); ?>">Maketing</a></li>
                                        <li><a href="<?php echo e(route('LOGITICS')); ?>">Logitics & Quản Lý Chuỗi Cung Ứng</a>
                                        </li>
                                        <li><a href="<?php echo e(route('Luat_kt')); ?>">Luật Kinh Tế</a></li>
                                        <li><a href="<?php echo e(route('KT_quocte')); ?>">Kinh Tế Quốc Tế</a></li>
                                    </ul>
                                </li>
                                
                                <li>
                                    <a href="#">Khoa Khoa Học & Sức Khoẻ</a>
                                    <ul class="sub-menu">
                                        <span class="f-title">Nghành Học</span>
                                        <li><a href="<?php echo e(route('DieuDuong')); ?>">Điều Dưỡng</a></li>
                                        <li><a href="<?php echo e(route('DieuDuong')); ?>">Dinh Dưỡng</a></li>
                                    </ul>
                                </li>
                                
                                <li>
                                    <a href="#">Khoa Ngoại Ngữ</a>
                                    <ul class="sub-menu">
                                        <span class="f-title">Nghành Học</span>
                                        <li><a href="<?php echo e(route('ANH')); ?>">Ngôn Ngữ Anh</a></li>
                                        <li><a href="<?php echo e(route('NHAT')); ?>">Ngôn Ngữ Nhật</a></li>
                                        <li><a href="<?php echo e(route('TQ')); ?>">Ngôn Ngữ Trung Quốc</a></li>
                                        <li><a href="<?php echo e(route('HAN')); ?>">Ngôn Ngữ Hàn Quốc</a></li>
                                    </ul>
                                </li>
                                
                                <li>
                                    <a href="#">Khoa Khoa Học Xã Hội & Nhân Văn</a>
                                    <ul class="sub-menu">
                                        <span class="f-title">Nghành Học</span>
                                        <li><a href="<?php echo e(route('CT_xahoi')); ?>">Việt Nam Học</a></li>
                                        <li><a href="<?php echo e(route('VN_hoc')); ?>">Công Tác Xã Hội</a></li>
                                    </ul>
                                </li>
                                
                                <li>
                                    <a href="#">Khoa Du Lịch</a>
                                    <ul class="sub-menu">
                                        <span class="f-title">Nghành Học</span>
                                        <li><a href="<?php echo e(route('DL_luhanh')); ?>">Quản Trị & Du Lịch-Lữ Hành</a></li>
                                    </ul>
                                </li>
                                
                                <li>
                                    <a href="#">Khoa Âm Nhạc Ứng Dụng</a>
                                    <ul class="sub-menu">
                                        <span class="f-title">Nghành Học</span>
                                        <li><a href="<?php echo e(route('Thanhnhac')); ?>">Thanh Nhạc</a></li>
                                    </ul>
                                </li>
                                
                                <li>
                                    <a href="#">Truyền Thông Đa Phương Tiện</a>
                                    <ul class="sub-menu">
                                        <span class="f-title">Nghành Học</span>
                                        <li><a href="<?php echo e(route('TT_daphuongtien')); ?>">Truyền Thông Đa  Phương Tiện</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        
                        <li>
                            <a href="#">Tuyển Sinh</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">Tuyển Sinh Đại Học Chính Quy</a>
                                    
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
                
                <li>
                    <a href="#">Cựu Sinh Viên & Doanh Nghiệp</a>
                    <ul class="sub-menu">
                        <li><a href="#">Thêm Bài Tuyển Dụng</a></li>
                    </ul>
                </li>

                
                <li>
                    <a href="#">Phụ Huynh</a>
                    <ul class="sub-menu">
                        <li><a href="#">Tra Cứu Điểm</a></li>
                    </ul>
                </li>
            </ul>

            <div class="ml-auto">
                <a class="btn btn-custom" href="<?php echo e(route('login')); ?>">Login</a>
            </div>
        </nav>
    </div>
</div>
<?php /**PATH D:\PortalTLU\Sources\Project_CDTN\resources\views/index_Chuan/Layout/menu.blade.php ENDPATH**/ ?>