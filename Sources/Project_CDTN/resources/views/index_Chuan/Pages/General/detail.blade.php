@extends('index_Chuan.Layout.master')
@section('menu')
    @include('index_Chuan.Layout.menu')
@endsection
@section('content')
    <!-- Single Post Start-->
    <div class="single">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-8">
                    <div class="single-content">
                        
                            <h1>{!!$post->title!!}</h1>
                            <hr>
                                {!! $post->summary !!}  
                        {{-- Mục Tiêu đào Tạo --}}
                        <h2>Mục tiêu đào tạo</h2>
                        <hr>
                            {!! $post->content !!}

                        {{-- Sự nghiệp tương lai --}}
                        <h2></h2>
                        
                        
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="sidebar-widget">
                            <div class="single-bio">
                                {{-- <div class="single-bio-img">
                                    @foreach ($post as $pt)
                                        <img src="{{ $pt->img }}"/>    
                                    @endforeach
                                    
                                </div> --}}
                                <div class="single-bio-text">
                                    <h3>Mã nghành 7340201</h3>
                                    <p>
                                        Thời gian học <b>4 năm</b>
                                    </p>

                                    <p>
                                        Tổ hợp môn thi <b>A00,A01</b>
                                    </p>
                                    <p>
                                        Học phí <b>24.200.000vnđ/năm</b>
                                    </p>
                                </div>
                                <div class="single-bio-social">
                                    <a class="btn" href="https://www.facebook.com/groups/cnttdhthanglong"><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="btn" href="https://www.youtube.com/c/ThangLongUniversity"><i
                                            class="fab fa-youtube"></i></a>
                                    <a class="btn" href="https://www.instagram.com/thanglonguniversity/"><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="sidebar-widget">
                            <div class="search-widget">
                                <form>
                                    <input class="form-control" type="text" placeholder="Search Keyword">
                                    <button class="btn"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>

                        <div class="sidebar-widget">
                            <h2 class="widget-title">Điểm trúng tuyển gần nhất</h2>
                            <div class="text-widget">
                                <p>
                                    <li>Năm 2020 điểm trúng tuyển 20.00</li>
                                    <li>Năm 2019 điểm trúng tuyển 16.00</li>
                                    <li>Năm 2020 điểm trúng tuyển 15.00</li>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Single Post End-->
@endsection
@section('slide')
    @include('index_Chuan.Layout.slide')
@endsection
