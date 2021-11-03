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
                    @foreach ($post as $post)
                    <div class="blog-item" style="float: left">
                        <div class="blog-img">
                            <img style="height: 220px; with=200px;" src="/upload/images/{{$post->img}}"/>
                        </div>
                        <div class="blog-text">
                            <h3><a  href="/index/Students/Recruitment/{{ $post->id }}">{{$post->title}}</a></h3>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('slide')
    {{-- @include('index_Chuan.Layout.slide') --}}
@endsection
