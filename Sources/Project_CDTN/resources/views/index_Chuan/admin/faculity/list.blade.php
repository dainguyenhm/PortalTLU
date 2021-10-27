@extends('index_Chuan.admin.Layout_admin.index')
@section('content')
            <!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Khoa Nghành
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
                                    <th>faculity_major_id </th>
                                    <th>Delete</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($faculity as $fl)
                                <tr class="odd gradeX" align="center">
                                    <td>{{$fl->id}}</td>
                                    <td>{{$fl->name}}</td>
                                    <td>{{$fl->faculity_major_id }}</td>
                                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{route('delete',$fl->id)}}"> Delete</a></td>
                                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('getFaculity.update',$fl->id) }}">Edit</a></td>
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
