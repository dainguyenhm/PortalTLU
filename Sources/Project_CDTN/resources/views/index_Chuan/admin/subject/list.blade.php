@extends('index_Chuan.admin.Layout_admin.index')
@section('content')
            <!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Môn Học
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
                                    <th>Name</th>
                                    <th>Mã Môn Học</th>
                                    <th>Delete</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($subject as $sb)
                                <tr class="odd gradeX" align="center">
                                    <td>{{$sb->id}}</td>
                                    <td>{{$sb->name}}</td>
                                    <td>{{$sb->subject_code}}</td>
                                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{route('getSubject.delete',$sb->id)}}"> Delete</a></td>
                                    <td class="center"><i class="fa fa-pencil fa-fw"></i><a href="{{route('getSubject.update',$sb->id)}}">Edit</a></td>
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
