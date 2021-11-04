<div class="nav-bar">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">

            <ul class="nav">
                <li><a href="{{ route('home') }}">Trang Chủ</a></li>
                <li>
                    <a href="#">Thông Tin Chung</a>
                    <ul class="sub-menu">
                        <li><a href="#">Đào Tạo</a>
                            <ul class="sub-menu">
                                <span class="f-title">Khoa Bộ Môn</span>
                                <li>
                                    @foreach ($majors as $major)
                                        <li>
                                            <a href="#">{{ $major->name }}</a>
                                        <ul class="sub-menu">
                                            <span class="f-title">Nghành Học</span>
                                                @foreach ($major->childrenFaculityMajors as $children)  
                                                    <li><a href="/index/General/Faculity/Major/Details/{{$children->id}}">{{ $children->name }}</a></li>
                                                @endforeach
                                        </ul>
                                        </li>
                                    @endforeach
                                </li>
                            </ul>
                        </li>
                        {{-- Tuyển Sinh --}}
                        <li>
                            <a href="#">Tuyển Sinh</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="{{ route('formal') }}">Tuyển Sinh Đại Học Chính Quy</a>
                                    {{-- <ul class="sub-menu">
                                        <li><a href="#">level 3</a></li>
                                    </ul> --}}
                                </li>
                                <li><a href="{{ route('trainingMaster') }}">Tuyển Sinh Đào Tạo Thạc Sĩ</a></li>
                                <li><a href="{{ route('intermational') }}">Tuyển Sinh Đào Tạo Thạc Sĩ quốc tế</a></li>
                                <li><a href="{{ route('connection') }}">Tuyển Sinh Đào Tạo Liên Thông</a></li>
                            </ul>
                        </li>
                        <li><a href="{{route('event')}}">Sự Kiện</a></li>
                        <li><a href="{{route('scholarship')}}">Học Bổng</a></li>
                        </li>
                    </ul>
                </li>
                {{-- Sinh Viên --}}
                <li>
                    <a href="#">Sinh Viên</a>
                    <ul class="sub-menu">
                        <li><a href="{{ route('search') }}">Tra Cứu Kết Quả Học Tập</a></li>
                        <li>
                            <a href="#">Xem Thông Báo</a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('educate') }}">Đào Tạo</a></li>
                                <li><a href="{{ route('tuition') }}">Học Phí</a></li>
                                <li><a href="{{ route('insurance') }}">Bảo Hiểm</a></li>
                            </ul>
                        </li>
                        <li><a href="{{route('listRecruitment')}}">Xem Bài Đăng Tuyển Dụng</a></li>
                    </ul>
                </li>
                {{-- Giảng Viên --}}
                <li>
                    <a href="#">Giảng Viên</a>
                    <ul class="sub-menu">
                        <li><a href="{{route('teacher.search')}}">Tra Cứu Bảng Lương</a></li>
                        <li>
                            <a href="#">Xem Thông Báo</a>
                            <ul class="sub-menu">
                                <li><a href="{{route('teacher.educate')}}">Đào Tạo</a></li>
                                <li><a href="{{route('teacher.tuition')}}">Học Phí</a></li>
                                <li><a href="{{route('teacher.insurance')}}">Bảo Hiểm</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                {{-- Cựu Sinh Viên --}}
                <li>
                    <a href="#">Cựu Sinh Viên & Doanh Nghiệp</a>
                    <ul class="sub-menu">
                        <li><a href="{{ route('recruitment') }}">Thêm Bài Tuyển Dụng</a></li>
                    </ul>
                </li>

                {{-- Phụ Huynh --}}
                <li>
                    <a href="#">Phụ Huynh</a>
                    <ul class="sub-menu">
                        <li><a href="{{ route('parent.search') }}">Tra Cứu Điểm</a></li>
                    </ul>
                </li>

                @if (Auth::check() == true)
                    <li style="width: 203px; position: absolute; right: -260px;">

                        <a href="#"><i class="fas fa-user">&nbsp;&nbsp;</i> {{ auth()->user()->first_name }}
                            {{ auth()->user()->last_name }}</a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('profile') }}">Trang Cá Nhân</a></li>
                            <li><a href="{{ route('logout') }}"> <i class="fas fa-sign-out-alt">&nbsp;&nbsp;</i>Đăng
                                    xuất</a></li>
                        </ul>
                    </li>
                @endif
            </ul>

            @if (Auth::check() == false)
                <div class="ml-auto">
                    <a class="btn btn-custom" href="{{ route('login') }}">Login</a>
                </div>
            @endif
        </nav>
    </div>
</div>
