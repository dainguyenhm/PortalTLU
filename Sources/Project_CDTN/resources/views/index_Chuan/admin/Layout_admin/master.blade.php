        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ route('manager.index') }}">Trang Quản Trị</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">

                        <li><a><i
                                    class="fa fa-user fa-fw"></i>{{ auth()->user()->first_name }}&nbsp;{{ auth()->user()->last_name }}</a>
                        </li>
                        <label for=""></label>
                        <li><a href=""><i class="fa fa-gear fa-fw"></i>Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="{{ route('getAdmin.logout') }}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-tachometer-alt"></i>&nbsp;&nbsp;Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-user-shield"></i>&nbsp;&nbsp;Admin<span
                                    class="fa arrow"></span></a>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="{{ route('student.list') }}"><i class="fas fa-user-graduate"></i>&nbsp;&nbsp;Sinh
                                Viên<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ route('student.list') }}"><i
                                            class="fas fa-list-alt"></i>&nbsp;&nbsp;Danh sách</a>
                                </li>
                                <li>
                                    <a href="{{ route('getStudent.create') }}"><i
                                            class="fas fa-user-plus"></i>&nbsp;&nbsp;Thêm Sinh Viên</a>
                                </li>
                                <li>
                                    <a href="{{ route('Student.import') }}"><i
                                            class="fas fa-user-plus"></i>&nbsp;&nbsp;Import</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="{{ route('teacher.list') }}"><i class="fas fa-user-tie"></i>&nbsp;&nbsp;Giảng
                                Viên<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ route('teacher.list') }}"><i
                                            class="fas fa-list-alt"></i>&nbsp;&nbsp;Danh sách</a>
                                </li>
                                <li>
                                    <a href="{{ route('getTeacher.create') }}">Thêm Giảng Viên</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        {{-- <li>
                            <a href="{{ route('enterprise.list') }}"><i class="fa fa-users fa-fw"></i>&nbsp;&nbsp;Doanh
                                Nghiệp <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ route('enterprise.list') }}"><i
                                            class="fas fa-list-alt"></i>&nbsp;&nbsp;Danh sách</a>
                                </li>
                                <li>
                                    <a href="#">Thêm Doanh Nghiệp</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li> --}}
                        <li>
                            <a href="{{ route('post.list') }}"><i class="fas fa-paste"></i>&nbsp;&nbsp;Bài viết
                                <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ route('post.list') }}"><i
                                            class="fas fa-list-alt"></i>&nbsp;&nbsp;Danh
                                        sách</a>
                                </li>
                                <li>
                                    <a href="{{ route('post.insert') }}"><i
                                            class="fas fa-list-alt"></i>&nbsp;&nbsp;Thêm Bài Viết</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="{{ route('faculity.list') }}"><i class="fas fa-school"></i>&nbsp;&nbsp;Khoa,
                                ngành<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ route('faculity.list') }}"><i
                                            class="fas fa-list-alt"></i>&nbsp;&nbsp;Danh sách</a>
                                </li>
                                <li>
                                    <a href="{{ route('getFaculity.create') }}">Thêm khoa</a>
                                </li>
                                <li>
                                    <a href="{{ route('getMajor.create') }}">Thêm ngành</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="{{ route('subject.list') }}"><i class="fas fa-book-reader"></i>&nbsp;&nbsp;Môn
                                học<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ route('subject.list') }}"><i
                                            class="fas fa-list-alt"></i>&nbsp;&nbsp;Danh sách</a>
                                </li>
                                <li>
                                    <a href="{{ route('getSubject.create') }}">Thêm môn học</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="{{ route('transcript.list') }}"><i
                                    class="fas fa-window-restore"></i>&nbsp;&nbsp;Bảng Điểm <span
                                    class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ route('transcript.list') }}"><i
                                            class="fas fa-list-alt"></i>&nbsp;&nbsp;Danh sách</a>
                                </li>
                                <li>
                                    <a href="{{ route('gettranscript.create') }}">Thêm bảng điểm</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="{{ route('user.list') }}"><i class="fas fa-users"></i>&nbsp;&nbsp;User <span
                                    class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ route('user.list') }}"><i
                                            class="fas fa-list-alt"></i>&nbsp;&nbsp;Danh
                                        sách</a>
                                </li>
                                <li>
                                    <a href="{{ route('getUser.create') }}"><i
                                            class="fas fa-user-plus"></i>&nbsp;&nbsp;Thêm User</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="{{ route('user.list') }}"><i class="fas fa-users"></i>&nbsp;&nbsp;Roles<span
                                    class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ route('role.list') }}"><i
                                            class="fas fa-list-alt"></i>&nbsp;&nbsp;Danh
                                        sách</a>
                                </li>
                                <li>
                                    <a href="{{ route('getRole.create') }}"><i
                                            class="fas fa-user-plus"></i>&nbsp;&nbsp;Thêm Quyền</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
