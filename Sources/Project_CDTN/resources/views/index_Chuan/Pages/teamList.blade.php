@extends('index_Chuan.Layout.master')
@section('menu')
    @include('index_Chuan.Layout.menu')
@endsection
@section('content')
    <div class="team">
        <div class="container">
            <div class="section-header text-center">
                <p>Đội Ngũ</p>
                <h2>Hội Đồng Quản Trị</h2>
            </div>
            <div>
                <p style="text-align: center; font-family:Barlow; font-size:larger;">Trên chặng đường học tập đầy gian nan và vất vả của mình, mỗi người chúng ta đều cần một người thầy dìu
                    dắt. Dù dịu dàng hay nghiêm khắc, tạo động lực hay áp lực, đó chắc chắn phải là người thầy tâm huyết,
                    luôn hướng tới sự phát triển của học trò.</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('asset/img/co-sinh.jpg') }}" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Chủ Tịch</h2>
                            <p style="font-size: 15px;">GS.TSKH.Hoàng Xuân Sính</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('asset/img/thay-pham-huy-dung.jpg') }}" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Phó Chủ Tịch</h2>
                            <p>TS.Phạm Huy Dũng</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('asset/img/thay-truong-ngoc-kim.png') }}" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Phó Chủ Tịch</h2>
                            <p>Kĩ Sư. Trương Ngọc Kim</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('asset/img/thay-lam-quang-thiep.jpg') }}" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Uỷ Viên</h2>
                            <p style="font-size: 15px;">GS.TSKH.Lâm Quang Thiệp</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('asset/img/thay-phan-huy-phu.jpg') }}" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Hiệu Trưởng</h2>
                            <p>TS.Phan Huy Phú</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('asset/img/thay-nguyen-huu-dang.jpg') }}" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Phó Hiệu Trưởng</h2>
                            <p>ThS.Nguyễn Hữu Đăng</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('asset/img/co-dang-kim-nhung.jpg') }}" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Uỷ Viên</h2>
                            <p style="font-size: 15px;">TS.Đặng Kim Nhung</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('asset/img/thay-hoang-xuan-mo.jpg') }}" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Uỷ Viên</h2>
                            <p style="font-size: 15px;">Kỹ Sư. Hoàng Xuân Mô</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('asset/img/thay-than-the-son.jpg') }}" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Uỷ Viên</h2>
                            <p style="font-size: 15px;">ThS. Thân Thế Sơn</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="section-header text-center">
                <p>Đội Ngũ</p>
                <h2>Ban Giám Hiệu</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('asset/img/thay-phan-huy-phu.jpg') }}" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Hiệu Trưởng</h2>
                            <p>TS.Phan Huy Phú</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('asset/img/thay-nguyen-huu-dang.jpg') }}" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Phó Hiệu Trưởng</h2>
                            <p>ThS.Nguyễn Hữu Đăng</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('asset/img/thay-vu-do-quynh.jpg') }}" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Phó Hiệu Trưởng</h2>
                            <p>TS.Vũ Đỗ Quỳnh</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ asset('asset/img/thay-nguyen-minh-xuan_0.jpg') }}" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Phó Hiệu Trưởng</h2>
                            <p style="font-size: 15px;">PGS.TS.Nguyễn Minh Xuân</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('slide')
    {{-- @include('index_Chuan.Layout.slide') --}}
@endsection
