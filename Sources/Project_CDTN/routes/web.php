<?php

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use GuzzleHttp\Middleware;
use Illuminate\Routing\RouteGroup;

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

Route::get('home', 'Index\HomeController@home')->name('home');

Route::get('Error\403', function () {
    return view('index_Chuan/403');
})->name('403');

Route::prefix('login')->group(function () {
    Route::get('dangnhap', 'Login\LoginController@getlogin')->name('login');
    Route::post('loginUser', 'Login\LoginController@postlogin')->name('loginUser');

    Route::get('logout', 'Login\LoginController@getlogout')->name('logout');
    Route::get('Quen-mat-khau', 'Login\LoginController@fogot')->name('forgotPW');
});
// 'middleware'=>['only.student','only.admin']
Route::group(['prefix' => 'index'], function () {
    Route::group(['prefix' => 'General'], function () {
        Route::group(['prefix' => 'Faculity'], function () {
            Route::prefix('Major')->group(function () { 
                Route::get('Details/{id}', 'Index\HomeController@detail')->name('details');
            });
        });

        Route::group(['prefix' => 'Admissions'], function () {
            Route::get('Formal-University', 'Pages\AdmissionController@formal')->name('formal');
            
            Route::get('Training-Master', 'Pages\AdmissionController@trainingMaster')->name('trainingMaster');
            
            Route::get('Intermationnal-Master', 'Pages\AdmissionController@intermational')->name('intermational');
            
            Route::get('Connection', 'Pages\AdmissionController@connection')->name('connection');
        });

        Route::group(['prefix' => 'Event'], function() {
            Route::get('Event','Pages\EventController@event')->name('event');
        });

        Route::group(['prefix' => 'Scholarship'], function(){
            Route::get('Scholarship','Pages\ScholarShipController@scholarship')->name('scholarship');
        });
    });

    Route::group(['prefix' => 'SinhVien'], function () {
        Route::get('Tra-Cuu-Ket-Qua-Hoc-Tap', 'Index\StudentController@search')->name('search');

        Route::group(['prefix' => 'Thông Báo'], function () {
            Route::get('Dao-Tao', 'Index\StudentIndexController@educate')->name('educate');

            Route::get('Hoc-Phi', 'Index\StudentIndexController@tuition')->name('tuition');

            Route::get('Bao-Hiem', 'Index\StudentIndexController@insurance')->name('insurance');

            Route::get('Thong-Bao','Index\StudentIndexController@message')->name('message');

            Route::get('Thong-Bao-Bao-Hiem','Index\StudentIndexController@messageTuition')->name('messageTuition');
        });

        Route::get('Bai-Tuyen-Dung', 'Index\StudentIndexController@newpost')->name('newpost');
    });

    Route::prefix('Profile')->group(function () {
        Route::get('trang-ca-nhan', 'Login\LoginController@Profile')->name('profile');
        Route::post('sua-trang-ca-nhan/{id}', 'Login\LoginController@postProfile')->name('postProfile');
    });
});

Route::prefix('login-Admin')->group(function () {
    Route::get('index', 'Admin\LoginAdminController@getlogin')->name('getAdmin.login');
    Route::post('login', 'Admin\LoginAdminController@postlogin')->name('postAdmin.login');
    Route::get('logout', 'Admin\LoginAdminController@getlogout')->name('getAdmin.logout');
});
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'only.admin']], function () {
    Route::get('quan-tri', 'Admin\LoginAdminController@manager')->name('manager.index');

    Route::prefix('user')->group(function () {
        Route::get('list', 'Admin\UserController@list')->name('user.list');

        Route::get('form-create-user', 'Admin\UserController@create')->name('getUser.create');

        Route::post('create-user', 'Admin\UserController@store')->name('postUser.create');

        Route::get('update/{id}', 'Admin\UserController@getupdate')->name('getUser.update');

        Route::post('update/{id}', 'Admin\UserController@postupdate')->name('postUser.update');

        Route::get('delete/{id}', 'Admin\UserController@getdelete')->name('getUser.delete');
    });

    Route::prefix('students')->group(function () {
        Route::get('list', 'Admin\StudentController@list')->name('student.list');

        Route::get('create-student', 'Admin\StudentController@create')->name('getStudent.create');

        Route::post('form-create-student', 'Admin\StudentController@store')->name('postStudent.create');

        Route::get('update/{id}', 'Admin\StudentController@getupdate')->name('getStudent.update');

        Route::post('update/{id}', 'Admin\StudentController@postupdate')->name('postStudent.update');

        Route::get('delete/{id}', 'Admin\StudentController@delete')->name('getStudent.delete');
    });

    Route::prefix('teachers')->group(function () {
        Route::get('list', 'Admin\TeacherController@list')->name('teacher.list');

        Route::get('create', 'Admin\TeacherController@create')->name('getTeacher.create');

        Route::post('create', 'Admin\TeacherController@store')->name('postTeacher.create');

        Route::get('update/{id}', 'Admin\TeacherController@getupdate')->name('getTeacher.update');

        Route::post('update/{id}', 'Admin\TeacherController@postupdate')->name('postTeacher.update');

        Route::get('delete/{id}', 'Admin\TeacherController@getdelete')->name('getTeacher.delete');
    });

    Route::prefix('enterprise')->group(function () {
        Route::get('list', 'Admin\EnterpriseController@list')->name('enterprise.list');
    });

    Route::prefix('post')->group(function () {
        Route::get('list', 'Admin\PostController@list')->name('post.list');

        Route::get('accept', 'Admin\PostController@accept')->name('accept');

        Route::get('form-insert-post','Admin\PostController@insert')->name('post.insert');

        Route::post('form-insert-post','Admin\PostController@store')->name('post.store');
    });

    Route::prefix('faculityMajor')->group(function () {
        Route::get('list', 'Admin\FaculityController@list')->name('faculity.list');

        Route::get('create-Faculity', 'Admin\FaculityController@createFaculity')->name('getFaculity.create');

        Route::post('create-Faculity', 'Admin\FaculityController@storeFaculity')->name('postFaculity.create');

        Route::get('update/{id}', 'Admin\FaculityController@getupdate')->name('getFaculity.update');

        Route::post('update/{id}', 'Admin\FaculityController@postupdate')->name('postFaculity.update');

        Route::get('create-Major', 'Admin\FaculityController@createMajor')->name('getMajor.create');

        Route::post('create-Major', 'Admin\FaculityController@storeMajor')->name('postMajor.create');

        Route::get('delete/{id}', 'Admin\FaculityController@delete')->name('delete');
    });

    Route::prefix('subject')->group(function () {
        Route::get('list', 'Admin\SubjectController@list')->name('subject.list');

        Route::get('create', 'Admin\SubjectController@create')->name('getSubject.create');

        Route::post('create', 'Admin\SubjectController@store')->name('postSubject.create');

        Route::get('update/{id}', 'Admin\SubjectController@getupdate')->name('getSubject.update');

        Route::post('update/{id}', 'Admin\SubjectController@postupdate')->name('postSubject.update');

        Route::get('delete/{id}', 'Admin\SubjectController@getdelete')->name('getSubject.delete');
    });
    Route::prefix('transcript')->group(function () {
        Route::get('transcript', 'Admin\TranscriptController@list')->name('transcript.list');

        Route::get('create-transcript', 'Admin\TranscriptController@getcreate')->name('gettranscript.create');

        Route::post('create-transcript', 'Admin\TranscriptController@getcreate')->name('posttranscript.create');

        Route::post('/import-csv', 'Admin\TranscriptController@import_csv')->name('Transcript.import');
    });

    Route::prefix('role')->group(function () {
        Route::get('list', 'Admin\RoleController@listRole')->name('role.list');

        Route::get('form-create-roles', 'Admin\RoleController@create')->name('getRole.create');

        Route::post('create-roles', 'Admin\RoleController@store')->name('postRole.sotre');
    });

    Route::get('only-admin', function () {
        echo "Admin Zone";
    });
});

Route::prefix('index')->group(function () {
    Route::prefix('Old-Student')->group(function () {
        Route::get('pots', 'Index\StudentController@getpost')->name('getPost.index');
    });
});
