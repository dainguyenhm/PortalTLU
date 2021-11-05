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
                @foreach ($post as $post)
                    @if ($post->link != null && $post->status == 1 && $post->message == 1)
                        <div class="col-lg-4">
                            <div class="blog-item">
                                <div class="blog-img">
                                    <img src="{{ asset('upload/images/LogoTLU.jpg') }}" alt="Image">
                                </div>
                                <div class="blog-text">
                                    <h3><a
                                            href="/index/Students/Messages/Message-Tuition/{{ $post->id }}">{{ $post->title }}</a>
                                    </h3>
                                    <p></p>
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
