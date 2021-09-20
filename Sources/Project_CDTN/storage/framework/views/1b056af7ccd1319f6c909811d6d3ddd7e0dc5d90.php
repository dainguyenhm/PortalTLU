<?php echo $__env->make('index_Chuan.Layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- Top Bar Start -->
<div class="top-bar">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-12">
                <div class="logo">
                    <a href="<?php echo e(route('index')); ?>">
                        
                        <img width="480px" height="auto" src="<?php echo e(asset('asset/img/logo.svg')); ?>" alt="Logo">
                    </a>
                </div>
            </div>
            <div class="col-lg-8 col-md-7 d-none d-lg-block">
                <div class="row">
                    <div class="col-4">
                        <div class="top-bar-item">
                            <div class="top-bar-icon">
                                <i class="far fa-clock"></i>
                            </div>
                            <div class="top-bar-text">
                                <h3>Thời gian làm việc</h3>
                                <p>Mon - Fri, 8:00AM - 18:00PM</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="top-bar-item">
                            <div class="top-bar-icon">
                                <i class="fa fa-phone-alt"></i>
                            </div>
                            <div class="top-bar-text">
                                <h3>Số điện thoại</h3>
                                <p>024 3858 7346</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="top-bar-item">
                            <div class="top-bar-icon">
                                <i class="far fa-envelope"></i>
                            </div>
                            <div class="top-bar-text">
                                <h3>Email</h3>
                                <p>info@thanglong.edu.vn</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Top Bar End -->
<?php echo $__env->yieldContent('menu'); ?>
<?php echo $__env->yieldContent('slide'); ?>
<?php echo $__env->yieldContent('content'); ?>
<!-- Back to top button -->
<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- Pre Loader -->
<div id="loader" class="show">
    <div class="loader"></div>
</div>

<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="footer-contact">
                    <h2>Thông Tin Liên Lạc</h2>
                    <p><i class="fa fa-map-marker-alt"></i>Nghiêm Xuân Yêm - Đại Kim - Hoàng Mai - Hà Nội</p>
                    <p><i class="fa fa-phone-alt"></i>024 3858 7346</p>
                    <p><i class="fa fa-envelope"></i>info@thanglong.edu.vn</p>
                    <div class="footer-social">
                        
                        <a class="btn" href="https://www.facebook.com/thanglonguniversity"><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn" href="https://www.youtube.com/channel/UClrfICnLonC_sEF5TVEKc3A"><i
                                class="fab fa-youtube"></i></a>
                        <a class="btn" href="https://www.instagram.com/thanglonguniversity/"><i
                                class="fab fa-instagram"></i></a>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-link">
                    <h2>Giới Thiệu</h2>
                    <a href="">Giới Thiệu</a>
                    <a href="">Đào Tạo Trực Tuyến</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-link">
                    <h2>Tuyển Sinh</h2>
                    <a href="">Tuyển Sinh Đại Học Chính Quy</a>
                    <a href="">Đăng Ký Học</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                
            </div>
        </div>
    </div>
    <div class="container copyright">
        <p>&copy; <a href="#"></a> Copyright © 2021 Thang Long University.All rights reserved. <a
                href="https://htmlcodex.com"></a></p>
    </div>
</div>


<?php echo $__env->make('index_Chuan.Layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH D:\PortalTLU\Sources\Project_CDTN\resources\views/index_Chuan/Layout/master.blade.php ENDPATH**/ ?>