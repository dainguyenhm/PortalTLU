@extends('index_Chuan.Layout.master')
@section('menu')
    @include('index_Chuan.Layout.menu')
@endsection
@section('content')
    <!-- Single Post Start-->
    <div class="menu-tab">
        <div class="tab">
            <button class="tablinks" onclick="openCity(event, 'profile')" id="defaultOpen">Tra Cứu Bảng Điểm</button>

        </div>

        <div id="profile" class="tabcontent">
            <div class="col-lg-7" style="padding: 20px 20px; ">
                <form action="{{ route('postSearch') }}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <div class="form-group">
                        <label>Tra Cứu Bảng Điểm</label>
                        <input class="form-control " name="search" placeholder="Nhập Mã Sinh Viên......." value="" />
                    </div>

                    <button type="submit" class="btn btn-info">Tra Cứu</button>
                    <button type="reset" class="btn btn-secondary">Đặt Lại</button>
                <form>
            </div>

        </div>

    </div>
    <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>
    <!-- Single Post End-->
@endsection
@section('slide')
    {{-- @include('index_Chuan.Layout.slide') --}}
@endsection
