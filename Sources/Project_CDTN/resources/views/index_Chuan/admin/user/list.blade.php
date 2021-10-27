@extends('index_Chuan.admin.Layout_admin.index')
@section('content')
            <!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Users
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
                                    <th>Họ</th>
                                    <th>Tên</th>
                                    <th>UserName</th>
                                    <th>PassWord</th>
                                    <th>Ngày Sinh</th>
                                    <th>Email</th>
                                    <th>Số điện thoại</th>
                                    <th>Địa chỉ</th>
                                    <th>Loại Tài Khoản</th>
                                    <th>Giới Tính</th>
                                    <th>Xoá</th>
                                    <th>Sửa</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach () --}}
                                    @foreach ($user as $us)
                                        <tr class="odd gradeX" align="center">
                                            <td>{{$us->id}}</td>
                                            <td>{{$us->first_name}}</td>
                                            <td>{{$us->last_name}}</td>
                                            <td>{{$us->user_name}}</td>
                                            <td>{{$us->password}}</td>
                                            <td>{{$us->date_birth}}</td>
                                            <td>{{$us->email}}</td>
                                            <td>{{$us->phone_number}}</td>
                                            <td>{{$us->address}}</td>
                                            <td>
                                                @switch($us->type)
                                                    @case(0)
                                                        {{"Admin"}}
                                                        @break
                                                    @case(1)
                                                        {{"Sinh Viên"}}
                                                        @break
                                                    @case(2)
                                                        {{"Giảng Viên"}}
                                                        @break
                                                    @default
                                                        
                                                @endswitch
                                            
                                            </td>
                                            <td> 
                                                @switch($us->sex)
                                                @case(0)
                                                    {{"nam"}}
                                                    @break
                                                @case(1)
                                                    {{"nữ"}}
                                                    @break                        
                                                @default
                                            @endswitch</td>
                                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{route('getUser.delete',$us->id)}}">Xoá</a></td>
                                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('getUser.update',$us->id)}}">Sửa</a></td>
                                        </tr> 
                                    @endforeach                                   
                                {{-- @endforeach --}}

                            </tbody>
                        </table>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
@endsection

@include('index_Chuan.admin.Layout_admin.footer')
