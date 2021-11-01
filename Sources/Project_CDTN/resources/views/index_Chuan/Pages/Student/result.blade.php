@extends('index_Chuan.Layout.master')
@section('menu')
    @include('index_Chuan.Layout.menu')
@endsection
@section('content')
    <!-- Single Post Start-->
    <div class="menu-tab">
        <div class="tab">
            <button class="tablinks" onclick="openCity(event, 'profile')" id="defaultOpen">Két Quả Tra Cứu <button>

        </div>

        <div id="profile" class="tabcontent">
            <div class="col-lg-7" style="padding: 20px 20px; ">
                <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Mã Môn Học</th>
                        <th scope="col">Tên Môn Học</th>
                        <th scope="col">Điểm</th>
                        <th scope="col">Số Tín Chỉ</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>GT0321</td>
                        <td>Giải Tích 1</td>
                        <td>9</td>
                        <td>3</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>GT456</td>
                        <td>Giả Tích 2</td>
                        <td>9</td>
                        <td>3</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td colspan="3">Tổng Số Tín Chỉ</td>
                        <td>6</td>
                        
                      </tr>
                    </tbody>
                  </table>
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
