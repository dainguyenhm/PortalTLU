@extends('index_Chuan.Layout.master')
@section('menu')
    @include('index_Chuan.Layout.menu')
@endsection
@section('content')
    <div class="menu-tab">
        <div class="tab">
            <button class="tablinks" onclick="openCity(event, 'profile')" id="defaultOpen">Xem Thông Tin Cá
                Nhân</button>
            <button class="tablinks" onclick="openCity(event, 'updateProfile')">Sửa Thông Tin Cá Nhân</button>
            <button class="tablinks" onclick="openCity(event, 'forgotPw')">Đổi Mật Khẩu</button>
        </div>

        <div id="profile" class="tabcontent">
            @include('index_Chuan.Login_index.infor.inforUser')
        </div>

        <div id="updateProfile" class="tabcontent">
            @include('index_Chuan.Login_index.infor.update_profile')
        </div>

        <div id="forgotPw" class="tabcontent">
            @include('index_Chuan.Login_index.infor.forgotPW')
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
@endsection
@section('slide')
    {{-- @include('index_Chuan.Layout.slide') --}}
@endsection
