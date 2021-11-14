@extends('index_Chuan.Layout.master')
@section('menu')
    @include('index_Chuan.Layout.menu')
@endsection
@section('content')
    <div class="container">
        <div class="cod-md-12">
            <div class="row">
              <div style="padding-top: 40px;">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Mã Số</th>
                            <th scope="col">Họ Tên</th>
                            <th scope="col">Phòng Ban</th>
                            <th scope="col">Hệ Số Lương</th>
                            <th scope="col">Hệ Số Chức Vụ</th>
                            <th scope="col">Lương Cơ Bản</th>
                            <th scope="col">Tiền Lương</th>
                            <th scope="col">Tiền Thưởng</th>
                            <th scope="col">Tổng Lương</th>
                            <th scope="col">BHXH</th>
                            <th scope="col">BHYT</th>
                            <th scope="col">Thuế Thu Nhập Cá Nhân</th>
                            <th scope="col">Thực Lĩnh</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">CTI007</th>
                            <td>Lê Văn Nam</td>
                            <td>Phòng Đào Tạo</td>
                            <td>4</td>
                            <td>2</td>
                            <td>2.000.000</td>
                            <td>12.000.000</td>
                            <td>3.000.000</td>
                            <td>15.000.000</td>
                            <td>750.000</td>
                            <td>300.000</td>
                            <td>200.000</td>
                            <td>13.750.000</td>
                        </tr>
                    </tbody>
                </table>
              </div>
            </div>
        </div>
    </div>
@endsection
@section('slide')
    {{-- @include('index_Chuan.Layout.slide') --}}
@endsection
