@extends('index_Chuan.admin.Layout_admin.index')
@section('content')
            <!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Giảng Viên
                                <small>Danh Sách</small>
                            </h1>
                        </div>
                        <!-- /.col-lg-12 -->
                        @if(session('Thongbao'))
                            <div class="alert alert-success">
                                {{session('Thongbao')}}
                            </div>
                        @endif
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr align="center">
                                    <th>ID</th>
                                    <th>Tên Giảng Viên</th>
                                    <th>Mã Giảng Viên</th>
                                    <th>Xoá</th>
                                    <th>Sửa</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($teacher as $tc)
                                <tr class="odd gradeX" align="center">
                                    <td>{{$tc->id}}</td>
                                    <td>{{$tc->User->first_name}}&nbsp;{{$tc->User->last_name}}</td>
                                    <td>{{$tc->teacher_code}}</td>
                                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{route('getTeacher.delete',$tc->id)}}"> Xoá</a></td>
                                    <td class="center"><i class="fa fa-pencil fa-fw"></i><a href="{{route('getTeacher.update',$tc->id)}}">Sửa</a></td>
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
