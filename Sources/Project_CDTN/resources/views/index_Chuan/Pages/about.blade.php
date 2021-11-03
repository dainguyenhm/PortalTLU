@extends('index_Chuan.Layout.master')
@section('menu')
    @include('index_Chuan.Layout.menu')
@endsection
@section('content')
<div class="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-img">
                    <img src="{{asset('asset/img/ThangLong.jpg')}}" alt="Image">
                </div>
            </div>
            <div class="col-lg-6" style="font-family: 'Barlow';">
                <div class="section-header text-left">
                    <h2><b" > Đại học định hướng ứng dụng</b></h2>
                </div>
                <div class="about-content">
                    <p>
                        Lorem ipsum dolor sit amet elit. In vitae turpis. Donec in hendre dui, vel blandit massa. Ut vestibu suscipi cursus. Cras quis porta nulla, ut placerat risus. Aliquam nec magna eget velit luctus dictum
                    </p>
                    <ul>
                        <li><i class="far fa-check-circle"></i>Seats washing</li>
                        <li><i class="far fa-check-circle"></i>Vacuum cleaning</li>
                        <li><i class="far fa-check-circle"></i>Interior wet cleaning</li>
                        <li><i class="far fa-check-circle"></i>Window wiping</li>
                    </ul>
                    <a class="btn btn-custom" href="">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('slide')
    {{-- @include('index_Chuan.Layout.slide') --}}
@endsection