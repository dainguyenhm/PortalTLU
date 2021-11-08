@extends('index_Chuan.Layout.master')
@section('menu')
    @include('index_Chuan.Layout.menu')
@endsection
@section('content')

<div class="container">
    <div class="row">

        <div class="col-md-12">
            <h3><b style="font-size: 60px;"> Thông Tin Tuyển Sinh Đại Học 2021 </b></h3>
        </div>
        
    </div>
    <div class="row">
        <div class="col-md-12">
            <embed src="{{ asset('pdf/a_DEANTUYENSINHNAM2021.PDF') }}" type="application/pdf"   height="1200px" width="1200">
        </div>
    </div>
</div>
@endsection
@section('slide')
    {{-- @include('index_Chuan.Layout.slide') --}}
@endsection
