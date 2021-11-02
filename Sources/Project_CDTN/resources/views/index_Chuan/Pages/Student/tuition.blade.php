@extends('index_Chuan.Layout.master')
@section('menu')
    @include('index_Chuan.Layout.menu')
@endsection
@section('content')
<div class="blog">
    <div class="container">
        <div class="section-header text-center">
            <p>THÔNG BÁO</p>
            <h2>Thông Báo Học Phí Trường Đại Học Thăng Long</h2>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="{{asset('upload/images/TLU/THP-KyI-NhomI.jpg')}}" alt="Image">
                    </div>
                    <div class="blog-text">
                        <h3><a href="{{route('messageTuition')}}">Thông Báo Thu Học Phí Học Kỳ I Nhóm I Năm học 2021</a></h3>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="{{asset('upload/images/TLU/THP-KyII-NhomI.jpg')}}" alt="Image">
                    </div>
                    <div class="blog-text">
                        <h3><a href="{{route('messageTuition')}}">Thông Báo Thu Học Phí Học Kỳ II Nhóm I Năm học 2021</a></h3>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="{{asset('upload/images/TLU/THP-KyIII-NhomI.jpg')}}" alt="Image">
                    </div>
                    <div class="blog-text">
                        <h3><a href="{{route('messageTuition')}}">Thông Báo Thu Học Phí  Học Kỳ III Nhóm I Năm học 2021 </a></h3>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="{{asset('upload/images/TLU/THP-KyI-NhomII.jpg')}}" alt="Image">
                    </div>
                    <div class="blog-text">
                        <h3><a href="{{route('messageTuition')}}">Thông Báo Thu Học Phí  Học Kỳ I Nhóm II Năm học 2021</a></h3>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="{{asset('upload/images/TLU/THP-KyII-NhomII.jpg')}}" alt="Image">
                    </div>
                    <div class="blog-text">
                        <h3><a href="{{route('messageTuition')}}">Thông Báo Thu Học Phí  Học Kỳ II Nhóm II Năm học 2021</a></h3>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="{{asset('upload/images/TLU/THP-KyIII-NhomII.jpg')}}" alt="Image">
                    </div>
                    <div class="blog-text">
                        <h3><a href="{{route('messageTuition')}}">Thông Báo Thu Học Phí  Học Kỳ III Nhóm II Năm học 2021</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="{{asset('upload/images/TLU/THP-KyI-NhomIII.jpg')}}" alt="Image">
                    </div>
                    <div class="blog-text">
                        <h3><a href="{{route('messageTuition')}}">Thông Báo Thu Học Phí  Học Kỳ I Nhóm III Năm học 2021</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="{{asset('upload/images/TLU/THP-KyII-NhomIII.jpg')}}" alt="Image">
                    </div>
                    <div class="blog-text">
                        <h3><a href="{{route('messageTuition')}}">Thông Báo Thu Học Phí  Học Kỳ II Nhóm III Năm học 2021</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="{{asset('upload/images/TLU/THP-KyIII-NhomIII.jpg')}}" alt="Image">
                    </div>
                    <div class="blog-text">
                        <h3><a href="{{route('messageTuition')}}">Thông Báo Thu Học Phí  Học Kỳ III Nhóm III Năm học 2021</a></h3>
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
