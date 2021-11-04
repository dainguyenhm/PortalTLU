@extends('index_Chuan.Layout.master')
@section('menu')
    @include('index_Chuan.Layout.menu')
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form>
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="validationDefault01">Số Tiết</label>
                            <input type="text" class="form-control" name="lesson" id="validationDefault01" placeholder="Nhập Số Tiết....." 
                                required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationDefault02">Hệ Số Giáo Viên</label>
                            <input type="text" class="form-control" name="teacherCoefficient" id="validationDefault02" placeholder="Nhập Hệ Số Giáo Viên....." 
                                required>
                        </div> <br> <br>                        
                        <div class="col-md-4 mb-3">
                            <label for="validationDefault02">Hệ Số Môn Học</label>
                            <input type="text" class="form-control" id="subjectCoefficient" placeholder="Hệ Số Môn Học......"
                                required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationDefaultUsername">Hệ Số Lớp</label>
                            <div class="input-group">
                            <input type="text" class="form-control" id="validationDefaultUsername" placeholder="Hệ Số Lớp......"
                                    aria-describedby="inputGroupPrepend2" required>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationDefaultUsername">Kết Quả</label>
                            <div class="input-group">
                            <input type="text" class="form-control" name="result"
                                    aria-describedby="inputGroupPrepend2" required>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Tra Cứu</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('slide')
    {{-- @include('index_Chuan.Layout.slide') --}}
@endsection
