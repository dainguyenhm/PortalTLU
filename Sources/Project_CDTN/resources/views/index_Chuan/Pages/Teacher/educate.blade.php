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
                @foreach ($post as $post)
                    @if ($post->link != null && $post->message == 0 && $post->status == 1)
                        <div class="col-lg-4">
                            <div class="blog-item">
                                <div class="blog-img">
                                    <img src="{{ asset('upload/images/LogoTLU.jpg') }}" alt="Image">
                                </div>
                                <div class="blog-text">
                                    <h3><a
                                            href="/index/Students/Messages/Details/{{ $post->id }}">{{ $post->title }}</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection
@section('slide')
    {{-- @include('index_Chuan.Layout.slide') --}}
@endsection
