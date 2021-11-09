@extends('index_Chuan.Layout.master')
@section('menu')
    @include('index_Chuan.Layout.menu')
@endsection
@section('content')
    <div class="price">
        <div class="container">
            <div class="section-header text-center">
                <p>CÂU LẠC BỘ</p>
                <h2>Đại Học Thăng Long</h2>
            </div>
            <div class="row" style="font-family: ui-serif; font-size: 17px;">
                <div class="col-md-4" >
                    <div class="price-item">
                        <div class="price-header">
                            <h3><b>Học Thuật</b></h3>
                        </div>
                        <div class="price-body">
                            <ul>
                                <li><i class="far fa-check-circle"></i>Câu Lạc Bộ Kỹ Năng Kinh Doanh BOSS</li>
                                <li><i class="far fa-check-circle"></i>Câu Lạc Bộ Ngân Hàng UB</li>
                                <li><i class="far fa-check-circle"></i>Câu Lạc Bộ Tin Học</li>
                                <li><i class="far fa-check-circle"></i>Câu Lạc Bộ Nhật</li>
                                <li><i class="far fa-check-circle"></i>Câu Lạc Bộ Tiếng Anh(EC)</li>
                                <li><i class="far fa-check-circle"></i>Câu Lạc Bộ Tiếng Trung</li>
                                <li><i class="far fa-check-circle"></i>Câu Lạc Bộ hàn(TLKC)</li>
                                <li><i class="far fa-check-circle"></i>Câu Lạc Bộ Yosakoi</li>
                                <li><i class="far fa-check-circle"></i>Câu Lạc Bộ Du Lịch(TLTC)</li>
                                <li><i class="far fa-check-circle"></i>Câu Lạc Bộ logistics</li>
                            </ul>
                        </div>
                        {{-- <div class="price-footer">
                            <a class="btn btn-custom" href="">Book Now</a>
                        </div> --}}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="price-item featured-item">
                        <div class="price-header">
                            <h3>Nghệ Thuật</h3>
                        </div>
                        <div class="price-body">
                            <ul>
                                <li><i class="far fa-check-circle"></i>Câu Lạc Bộ Âm Nhạc</li>
                                <li><i class="far fa-check-circle"></i>Câu Lạc Bộ Guitar</li>
                                <li><i class="far fa-check-circle"></i>Câu Lạc Bộ Kịch Nói</li>
                                <li><i class="far fa-check-circle"></i>Câu Lạc Bộ Thang Long Dancing Club(TLDC)</li>
                                <li><i class="far fa-check-circle"></i>Câu Lạc Bộ Thang Long Film Channel(TLFC)</li>
                                <li><i class="far fa-check-circle"></i>Câu Lạc Bộ Truyền Thông Đa Phương Tiện</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="price-item">
                        <div class="price-header">
                            <h3>Thể Thao</h3>
                        </div>
                        <div class="price-body">
                            <ul>
                                <li><i class="far fa-check-circle"></i>Câu Lạc Bộ Bóng Đá</li>
                                <li><i class="far fa-check-circle"></i>Câu Lạc Bộ Bóng Chuyền</li>
                                <li><i class="far fa-check-circle"></i>CâU Lạc Bộ Bóng Bàn</li>
                                <li><i class="far fa-check-circle"></i>CâU Lạc Bộ Việt Võ</li>
                                <li><i class="far fa-check-circle"></i>CâU Lạc Bộ Karate</li>
                                <li><i class="far fa-check-circle"></i>CâU Lạc Bộ TaekWondo</li>
                                <li><i class="far fa-check-circle"></i>CâU Lạc Bộ Bóng Rổ</li>
                            </ul>
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
