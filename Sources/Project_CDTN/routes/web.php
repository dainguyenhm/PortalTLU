<?php

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Models\User;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index_Chuan/index');
})->name('index');

Route::prefix('login')->group(function () {
    Route::get('dangnhap', 'Login\LoginController@getlogin')->name('login');
    Route::post('loginUser', 'Login\LoginController@postlogin')->name('loginUser');

    Route::get('logout', 'Login\LoginController@getlogout')->name('logout');
    Route::get('Quen-mat-khau', 'Login\LoginController@fogot')->name('forgotPW');
});

Route::prefix('Khoa')->group(function () {
    Route::prefix('ToanTin')->group(function () {
        Route::get('Khoa-hoc-may-tinh', 'Pages\toanTinController@KH_maytinh')->name('KH-maytinh');
        Route::get('He-thong-thong-tin', 'Pages\toanTinController@HT_thongTin')->name('HT-thongtin');
        Route::get('Cong-nghe-thong-tin', 'Page\/toanTinController@CN_thongtin')->name('CN-thongtin');
        Route::get('Mang-may-tinh', 'Pages\toanTinController@Mang_maytinh')->name('Mang-maytinh');
        Route::get('Toan-ung-dung', 'Pages\toanTinController@Toan_UD')->name('Toan-UD');
        Route::get('Tri-tue-nhan-tao', 'Pages\toanTinController@TT_nhantao')->name('TT-nhantao');
    });
    Route::prefix('KinhTe')->group(function () {
        Route::get('Ke-Toan', 'Pages\kinhTeController@Kinhte')->name('Kinhte');
        Route::get('Kinh-Te-Quoc-Te', 'Pages\kinhTeController@KT_quocte')->name('KT_quocte');
        Route::get('Logitics', 'Pages\kinhTeController@LOGITICS')->name('LOGITICS');
        Route::get('Luat-Kinh-Te', 'Pages\kinhTeController@Luat_kt')->name('Luat_kt');
        Route::get('Marketing', 'Pages\kinhTeController@Marketing')->name('Marketing');
        Route::get('Quan-Tri-Kinh-Doanh', 'Pages\kinhTeController@QT_kinhdoanh')->name('QT_kinhdoanh');
        Route::get('Tai-Chinh-Ngan-Hang', 'Pages\kinhTeController@TC_nganhang')->name('TC_nganhang');
    });
    Route::prefix('SucKhoe')->group(function () {
        Route::get('DieuDuong', 'Pages\sucKhoeController@DieuDuong')->name('DieuDuong');
        Route::get('DinhDuong', 'Pages\sucKhoeController@DinhDuong')->name('DinhDuong');
    });
    Route::prefix('NgoaiNgu')->group(function () {
        Route::get('Ngon-Ngu-Anh', 'Pages\ngoaiNguController@NN_ANH')->name('ANH');
        Route::get('Ngon-Ngu-Nhat', 'Pages\ngoaiNguController@NN_NHAT')->name('NHAT');
        Route::get('Ngon-Ngu-Han', 'Pages\ngoaiNguController@NN_HAN')->name('HAN');
        Route::get('Ngon-Ngu-Trung-Quoc', 'Pages\ngoaiNguController@NN_TQ')->name('TQ');
    });
    Route::prefix('XaHoi-NhanVan')->group(function () {
        Route::get('Cong-Tac-Xa-Hoi', 'Pages\xahoi_NhanvanController@CT_xahoi')->name('CT_xahoi');
        Route::get('Viet-Nam-Hoc', 'Pages\xahoi_NhanvanController@VN_hoc')->name('VN_hoc');
    });
    Route::prefix('TruyenThong')->group(function () {
        Route::get('Truyen-thong-da-phuong-tien', 'Pages\truyenThongController@TT_daphuongtien')->name('TT_daphuongtien');
    });
    Route::prefix('DULICH')->group(function () {
        Route::get('Du-Lich-Lu-Hanh', 'Pages\duLichController@DL_luhanh')->name('DL_luhanh');
    });
    Route::prefix('AMNHAC')->group(function () {
        Route::get('Thanh-Nhac', 'Pages/amNhacController@ThanhNhac')->name('Thanhnhac');
    });
});

Route::prefix('Profile')->group(function () {
    Route::get('trang-ca-nhan', 'Login\LoginController@Profile')->name('profile');
    Route::post('sua-trang-ca-nhan/{id}', 'Login\LoginController@postProfile')->name('postProfile');
});

Route::prefix('admin')->group(function () {
    Route::get('quan-tri', function () {
        return view('index_Chuan.admin.Layout_admin.index');
    });

    Route::prefix('user')->group(function () {
        Route::get('list', 'Admin\UserController@list')->name('user.list');

        Route::get('form-create-user', 'Admin\UserController@create')->name('getUser.create');

        Route::post('create-user', 'Admin\UserController@store')->name('postUser.create');

        Route::get('update/{id}','Admin\UserController@getupdate')->name('getUser.update');

        Route::post('update/{id}','Admin\UserController@postupdate')->name('postUser.update');

        Route::get('delete/{id}','Admin\UserController@getdelete')->name('getUser.delete');
    });

    Route::prefix('students')->group(function () {
        Route::get('list', 'Admin\StudentController@list')->name('student.list');

        Route::get('create-student', 'Admin\StudentController@create')->name('getStudent.create');

        Route::post('form-create-student', 'Admin\StudentController@store')->name('postStudent.create');

        Route::get('update/{id}','Admin\StudentController@getupdate')->name('getStudent.update');

        Route::post('update/{id}','Admin\StudentController@postupdate')->name('postStudent.update');

        Route::get('delete/{id}','Admin\StudentController@delete')->name('getStudent.delete');
    });

    Route::prefix('teachers')->group(function () {
        Route::get('list', 'Admin\TeacherController@list')->name('teacher.list');

        Route::get('create','Admin\TeacherController@create')->name('getTeacher.create');

        Route::post('create','Admin\TeacherController@store')->name('postTeacher.create');

        Route::get('update/{id}','Admin\TeacherController@getupdate')->name('getTeacher.update');

        Route::post('update/{id}','Admin\TeacherController@postupdate')->name('postTeacher.update');

        Route::get('delete/{id}','Admin\TeacherController@getdelete')->name('getTeacher.delete');
    });

    Route::prefix('enterprise')->group(function () {
        Route::get('list', 'Admin\EnterpriseController@list')->name('enterprise.list');
    });

    Route::prefix('post')->group(function () {
        Route::get('list', 'Admin\PostController@list')->name('post.list');

        Route::get('accept','Admin\PostController@accept')->name('accept');

        
    });

    Route::prefix('faculityMajor')->group(function () {
        Route::get('list', 'Admin\FaculityController@list')->name('faculity.list');

        Route::get('create-Faculity', 'Admin\FaculityController@createFaculity')->name('getFaculity.create');

        Route::post('create-Faculity', 'Admin\FaculityController@storeFaculity')->name('postFaculity.create');

        Route:: get('update/{id}','Admin\FaculityController@getupdate')->name('getFaculity.update');

        Route:: post('update/{id}','Admin\FaculityController@postupdate')->name('postFaculity.update');

        Route::get('create-Major', 'Admin\FaculityController@createMajor')->name('getMajor.create');

        Route::post('create-Major', 'Admin\FaculityController@storeMajor')->name('postMajor.create');

        Route::get('delete/{id}','Admin/FaculityController@delete')->name('delete');
    });

    Route::prefix('subject')->group(function () {
        Route::get('list', 'Admin\SubjectController@list')->name('subject.list');

        Route::get('create','Admin\SubjectController@create')->name('getSubject.create');

        Route::post('create','Admin\SubjectController@store')->name('postSubject.create');

        Route::get('update/{id}','Admin\SubjectController@getupdate')->name('getSubject.update');

        Route::post('update/{id}','Admin\SubjectController@postupdate')->name('postSubject.update');

        Route::get('delete/{id}','Admin\SubjectController@getdelete')->name('getSubject.delete');
    });
    Route::prefix('transcript')->group(function () {
        Route::get('transcript', 'Admin\TranscriptController@list')->name('transcript.list');
    });

    Route::prefix('role')->group(function () {
        Route::get('list', 'Admin\RoleController@listRole')->name('role.list');

        Route::get('form-create-roles','Admin\RoleController@create')->name('getRole.create');

        Route::post('create-roles','Admin\RoleController@store')->name('postRole.sotre');
    });
});

Route::prefix('index')->group(function () {
    Route::prefix('Old-Student')->group(function () {
      Route::get('pots','Index\StudentController@getpost')->name('getPost.index');
    });
});
