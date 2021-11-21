@extends('index_Chuan.Layout.master')
@section('menu')
    @include('index_Chuan.Layout.menu')
@endsection
@section('content')
    <!-- Single Post Start-->
    <div class="container">
        @if (auth()->user()->type == 1)
            <div class="row">
                <div class="col-md-12">
                    <div class="menu-tab">
                        <div class="tab">
                            <button class="tablinks" onclick="openCity(event, 'profile')" id="defaultOpen">Két Quả
                                Tra
                                Cứu
                                <button>
                        </div>
                        <div id="profile" class="tabcontent">
                            <table class="table table-bordered" style="overflow-y: scroll; height: 700px;">
                                <thead>
                                    <tr>
                                        <th scope="col">STT</th>
                                        <th scope="col">Mã Môn Học</th>
                                        <th scope="col">Tên Môn Học</th>
                                        <th scope="col">Điểm</th>
                                        <th scope="col">Số Tín Chỉ</th>
                                    </tr>
                                </thead>
                                <div>
                                    <h3><b>Bảng
                                            Điểm:{{ auth()->user()->first_name }}&nbsp;{{ auth()->user()->last_name }}&nbsp;{{ $student->student_code }}</b>
                                    </h3>
                                </div>
                                <tbody>
                                    @foreach ($credit as $K => $value)
                                        <tr>
                                            <th scope="row">{{ $K + 1 }}</th>
                                            <td>{{ $value->Subject->subject_code }}</td>
                                            <td>{{ $value->Subject->name }}</td>
                                            <td>{{ $value->score }}</td>
                                            <td>{{ $value->Subject->credit }}</td>
                                        </tr>
                                    @endforeach
                                    <tr>
                                        <th scope="row">{{ $K + 3 }}</th>
                                        <td colspan="2">Điểm Trung Bình</td>
                                        <td>{{ $count1 }}</td>
                                    </tr>

                                    <tr>
                                        <th scope="row">{{ $K + 2 }}</th>
                                        <td colspan="3">Tổng Số Tín Chỉ</td>
                                        <td>{{ $count }}</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>

                    </div>
                </div>
            </div>
        @endif
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
