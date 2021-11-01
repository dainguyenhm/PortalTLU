@extends('index_Chuan.admin.Layout_admin.index')
@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Bảng Điểm
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
                            <th>Student_id</th>
                            <th>Môn Học</th>
                            <th>Điểm</th>
                            <th>Xoá</th>
                            <th>Sửa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transcript as $transcript)
                            <tr class="odd gradeX" align="center">
                                <td>{{ $transcript->id }}</td>
                                <td>{{ $transcript->student_id}}</td>
                                <td>{{ $transcript->Subject->name }}</td>
                                <td>{{ $transcript->score }}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href=""> Xoá</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i><a href="">Sửa</a></td>
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
