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
                            <th>UserID</th>
                            <th>Mã Sinh Viên</th>
                            <th>Khoa Ngành</th>
                            <th>Trạng thái</th>
                            <th>Xoá</th>
                            <th>Sửa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($student as $st)
                            <tr class="odd gradeX" align="center">
                                <td>{{ $st->id }}</td>
                                <td>{{ $st->user_id }}</td>
                                <td>{{ $st->student_code }}</td>
                                <td>
                                    @switch($st->faculity_id)
                                        @case($st->faculity_id == 9)
                                            {{ 'Khoa học Máy Tính' }}
                                        @break
                                        @case($st->faculity == 10)
                                            {{ 'Toán Ứng Dụng' }}
                                        @break
                                        @case($st->faculity == 11)
                                            {{ 'Mạng Truyền Thông & Truyền Thông Dữ Liệu' }}
                                        @break
                                        @case($st->faculity == 12)
                                            {{ 'Hệ Thống Thông Tin' }}
                                        @break
                                        @case($st->faculity == 13)
                                            {{ 'Trí Tuệ Nhân Tạo' }}
                                        @break
                                        @case($st->faculity == 14)
                                            {{ 'Công Nghệ Thông tin' }}
                                        @break
                                        @case($st->faculity == 16)
                                            {{ 'Kế Toán' }}
                                        @break
                                        @case($st->faculity == 17)
                                            {{ 'Tài Chính Ngân Hàng' }}
                                        @break
                                        @case($st->faculity == 18)
                                            {{ 'Quản Trị Kinh Doanh' }}
                                        @break
                                        @case($st->faculity == 20)
                                            {{ 'Marketing' }}
                                        @break
                                        @case($st->faculity == 21)
                                            {{ 'Logitics & Quản Lý Chuỗi Cung Ứng' }}
                                        @break
                                        @case($st->faculity == 22)
                                            {{ 'Luật Kinh Tế' }}
                                        @break
                                        @case($st->faculity == 23)
                                            {{ 'Kinh Tế Quốc Tế' }}
                                        @break
                                        @case($st->faculity == 24)
                                            {{ 'Điều Dưỡng' }}
                                        @break
                                        @case($st->faculity == 25)
                                            {{ 'Dinh Dưỡng' }}
                                        @break
                                        @case($st->faculity == 26)
                                            {{ 'Ngôn Ngữ Anh' }}
                                        @break
                                        @case($st->faculity == 27)
                                            {{ 'Ngôn Ngữ Nhật Bản' }}
                                        @break
                                        @case($st->faculity == 28)
                                            {{ 'Ngôn Ngữ Hàn Quốc' }}
                                        @break
                                        @case($st->faculity == 29)
                                            {{ 'Ngôn Ngữ Trung Quốc' }}
                                        @break
                                        @case($st->faculity == 30)
                                            {{ 'Việt Nam Học' }}
                                        @break
                                        @case($st->faculity == 31)
                                            {{ 'Công Tác Xã Hội' }}
                                        @break
                                        @case($st->faculity == 32)
                                            {{ 'Quản Trị & Du Lịch - Lữ Hành' }}
                                        @break
                                        @case($st->faculity == 33)
                                            {{ 'Thanh Nhạc' }}
                                        @break
                                        @case($st->faculity == 35)
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
