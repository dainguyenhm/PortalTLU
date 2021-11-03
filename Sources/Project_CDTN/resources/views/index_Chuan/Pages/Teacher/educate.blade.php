@extends('index_Chuan.Layout.master')
@section('menu')
    @include('index_Chuan.Layout.menu')
@endsection
@section('content')
<div class="blog">
    <div class="container">
        <div class="section-header text-center">
            <p>THÔNG BÁO</p>
            <h2>Thông Báo Đào Tạo Trường Đại Học Thăng Long</h2>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="{{asset('upload/images/LogoTLU.jpg')}}" alt="Image">
                    </div>
                    <div class="blog-text">
                        <h3><a href="{{route('teacher.message')}}">Thông Báo Đăng Ký Học Kỳ I Nhóm I Năm học 2021</a></h3>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="{{asset('upload/images/LogoTLU.jpg')}}" alt="Image">
                    </div>
                    <div class="blog-text">
                        <h3><a href="{{route('teacher.message')}}">Thông Báo Đăng Ký Học Kỳ I Nhóm II Năm học 2021</a></h3>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="{{asset('upload/images/LogoTLU.jpg')}}" alt="Image">
                    </div>
                    <div class="blog-text">
                        <h3><a href="{{route('teacher.message')}}">Thông Báo Đăng Ký Học Kỳ I Nhóm III Năm học 2021 </a></h3>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="{{asset('upload/images/LogoTLU.jpg')}}" alt="Image">
                    </div>
                    <div class="blog-text">
                        <h3><a href="{{route('teacher.message')}}">Thông Báo Đăng Ký Học Kỳ II Nhóm I Năm học 2021</a></h3>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="{{asset('upload/images/LogoTLU.jpg')}}" alt="Image">
                    </div>
                    <div class="blog-text">
                        <h3><a href="{{route('teacher.message')}}">Thông Báo Đăng Ký Học Kỳ II Nhóm II Năm học 2021</a></h3>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="{{asset('upload/images/LogoTLU.jpg')}}" alt="Image">
                    </div>
                    <div class="blog-text">
                        <h3><a href="{{route('teacher.message')}}">Thông Báo Đăng Ký Học Kỳ II Nhóm III Năm học 2021</a></h3>
                        <p></p>
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
