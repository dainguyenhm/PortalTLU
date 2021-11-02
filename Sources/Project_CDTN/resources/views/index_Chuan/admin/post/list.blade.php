@extends('index_Chuan.admin.Layout_admin.index')
@section('content')
            <!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Bài Viết
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
                                    <th>User_ID</th>
                                    <th>Loại Bài Viết</th>
                                    <th>Nội Dung</th>
                                    <th>Tóm tắt</th>
                                    <th>Hình Ảnh</th>
                                    <th>Trạng Thái</th>
                                    <th>Duyệt</th>
                                    <th>Từ Chối</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($post as $pt )
                                <tr class="odd gradeX" align="center">
                                    <td>{{$pt->id}}</td>
                                    <td>{{$pt->user_id}}</td>
                                    <td>
                                        @switch($pt->type)
                                            @case(0)
                                                {{"Thông Báo"}}
                                                @break
                                            @case(1)
                                                {{"Bài Viết"}}
                                                @break
                                            @default
                                                
                                        @endswitch
                                    </td>
                                    <td>{{$pt->content}}</td>
                                    <td>{{$pt->summary}}</td>
                                    <td>{{$pt->img}}</td>
                                    <td>
                                        @switch($pt->status)
                                            @case(0)
                                                {{"Chưa Duyệt"}}
                                                @break
                                            @case(1)
                                                {{"Duyệt"}}
                                                @break
                                            @default
                                                
                                        @endswitch
                                    </td>
                                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="/admin/post/acceptPost/{{$pt->id}}"> Duyệt</a></td>
                                    <td class="center"><i class="fa fa-pencil fa-fw"></i><a href="/admin/post/delete/{{$pt->id}}">Từ Chối</a></td>
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
