@extends('index_Chuan.Layout.master')
@section('menu')
    @include('index_Chuan.Layout.menu')
@endsection
@section('content')
    <div class="container">
        <div class="cod-md-12">
            <div class="row">
               <div  style="padding-top: 40px;">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Mã Sinh Viên</th>
                            <th scope="col">Họ Tên</th>
                            <th scope="col">Ngày Sinh</th>
                            <th scope="col">Giới Tính</th>
                            <th scope="col">Dân Tộc</th>
                            <th scope="col">Nơi Sinh</th>
                            <th scope="col">Quốc Tịch</th>
                            <th scope="col">Nhập Học</th>
                            <th scope="col">Nghành Tốt Nghiệp</th>
                            <th scope="col">Loại</th>
                            <th scope="col">Năm Tốt Nghiệp</th>
                            <th scope="col">Hình Thức</th>
                            <th scope="col">Số Quyết Định Tốt Nghiệp</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">A28565</th>
                            <td>Trang Phương Mai</td>
                            <td>03/05/1992</td>
                            <td>Nữ</td>
                            <td>Kinh</td>
                            <td>Hà Nội</td>
                            <td>Việt Nam</td>
                            <td>TI29d1</td>
                            <td>Khoa Học Máy Tính</td>
                            <td>Khá</td>
                            <td>2021</td>
                            <td>Đại Học Chính Quy</td>
                            <td>21101805/QĐ-ĐHTL ngày 18/10/2021</td>
                        </tr>

                        <tr>
                            <th scope="row">A30070</th>
                            <td>Nguyễn Tú Điền</td>
                            <td>16/09/1999</td>
                            <td>Nam</td>
                            <td>Kinh</td>
                            <td>Hà Tây</td>
                            <td>Việt Nam</td>
                            <td>TI30h1</td>
                            <td>Khoa Học Máy Tính</td>
                            <td>Khá</td>
                            <td>2021</td>
                            <td>Đại Học Chính Quy</td>
                            <td>21101805/QĐ-ĐHTL ngày 18/10/2021</td>
                        </tr>

                        <tr>
                            <th scope="row">A30517</th>
                            <td>Hoàng Hải Dương</td>
                            <td>01/01/1999</td>
                            <td>Nam</td>
                            <td>Kinh</td>
                            <td>Hà Nội</td>
                            <td>Việt Nam</td>
                            <td>TI30h1</td>
                            <td>Khoa Học Máy Tính</td>
                            <td>Khá</td>
                            <td>2021</td>
                            <td>Đại Học Chính Quy</td>
                            <td>21101805/QĐ-ĐHTL ngày 18/10/2021</td>
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
