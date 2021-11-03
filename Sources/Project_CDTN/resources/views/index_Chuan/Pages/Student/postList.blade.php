@extends('index_Chuan.Layout.master')
@section('menu')
    @include('index_Chuan.Layout.menu')
@endsection
@section('content')
    <div class="blog">
        <div class="container">
            <div class="section-header text-center">
                <p>Bài Tuyển Dụng</p>
                <h2>Danh Sách Bài Tuyển Dụng</h2>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="{{ asset('upload/images/fpt.png') }}" alt="Image">
                        </div>
                        <div class="blog-text">
                            {{-- /index/Students/Recruitment/{{ $post->id }} --}}
                            <h3><a href="">Bài Đăng Tuyển Dụng Công ty FPT</a></h3>
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
