@extends('index_Chuan.admin.Layout_admin.index')
@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Sinh Viên
                        <small>Danh Sách</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                @if (session('Thongbao'))
                    <div class="alert alert-success">
                        {{ session('Thongbao') }}
                    </div>
                @endif
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr align="center">
                            <th>ID</th>
                            <th>Tên Sinh Viên</th>
                            <th>Mã Sinh Viên</th>
                            <th>Khoa Ngành</th>
                            <th>Trạng thái</th>
                            <th>Khoá</th>
                            <th>Xoá</th>
                            <th>Sửa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($student as $st)
                            <tr class="odd gradeX" align="center">
                                <td>{{ $st->id }}</td>
                                <td>{{ $st->User->first_name}}&nbsp;{{ $st->User->last_name}}</td>
                                <td>{{ $st->student_code }}</td>
                                
                                <td>
                                    @switch($st->faculity_id)
                                        @case(10)
                                            {{ 'Khoa học Máy Tính' }}
                                        @break
                                        @case(9)
                                            {{ 'Toán Ứng Dụng' }}
                                        @break
                                        @case(11)
                                            {{ 'Mạng Truyền Thông & Truyền Thông Dữ Liệu' }}
                                        @break
                                        @case(12)
                                            {{ 'Hệ Thống Thông Tin' }}
                                        @break
                                        @case( 14)
                                            {{ 'Trí Tuệ Nhân Tạo' }}
                                        @break
                                        @case(13)
                                            {{ 'Công Nghệ Thông tin' }}
                                        @break
                                        @case( 15)
                                            {{ 'Kế Toán' }}
                                        @break
                                        @case(16)
                                            {{ 'Tài Chính Ngân Hàng' }}
                                        @break
                                        @case(17)
                                            {{ 'Quản Trị Kinh Doanh' }}
                                        @break
                                        @case(18)
                                            {{ 'Marketing' }}
                                        @break
                                        @case(19)
                                            {{ 'Logitics & Quản Lý Chuỗi Cung Ứng' }}
                                        @break
                                        @case(20)
                                            {{ 'Luật Kinh Tế' }}
                                        @break
                                        @case(21)
                                            {{ 'Kinh Tế Quốc Tế' }}
                                        @break
                                        @case(22)
                                            {{ 'Điều Dưỡng' }}
                                        @break
                                        @case(23)
                                            {{ 'Dinh Dưỡng' }}
                                        @break
                                        @case(24)
                                            {{ 'Ngôn Ngữ Anh' }}
                                        @break
                                        @case(25)
                                            {{ 'Ngôn Ngữ Nhật Bản' }}
                                        @break
                                        @case(28)
                                            {{ 'Ngôn Ngữ Hàn Quốc' }}
                                        @break
                                        @case(29)
                                            {{ 'Ngôn Ngữ Trung Quốc' }}
                                        @break
                                        @case(30)
                                            {{ 'Việt Nam Học' }}
                                        @break
                                        @case(31)
                                            {{ 'Công Tác Xã Hội' }}
                                        @break
                                        @case(32)
                                            {{ 'Quản Trị & Du Lịch - Lữ Hành' }}
                                        @break
                                        @case(33)
                                            {{ 'Thanh Nhạc' }}
                                        @break
                                        @case(34)
                                            {{ 'Truyền Thông Đa Phương Tiện' }}
                                        @break
                                        @default

                                    @endswitch
                                </td>
                                <td>
                                    @if ($st->type == 0)
                                        {{ 'Đang học' }}
                                    @else
                                        {{ 'Đã tốt Nghiệp' }}
                                    @endif
                                </td>
                                <td>{{$st->session}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{route('getStudent.delete',$st->id)}}"> Xoá</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{ route('getStudent.update', $st->id) }}">Sửa</a></td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
@endsection

@include('index_Chuan.admin.Layout_admin.footer')
