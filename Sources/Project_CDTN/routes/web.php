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

Route::get('result', function () {
    return view('index_Chuan/Pages/Student/result');
});

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

Route::group(['prefix' => 'index'], function () {
    Route::get('about','Index\HomeController@about')->name('about');

    Route::get('team','Index\HomeController@team')->name('team');

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

    Route::group(['prefix' => 'Students','middleware'=>['only.student']], function () {
        Route::get('form-Look-up-learning-results', 'Index\StudentIndexController@search')->name('search');

        Route::post('search-results', 'Index\StudentIndexController@postSearch')->name('postSearch');

        Route::group(['prefix' => 'Messages'], function () {
            Route::get('Educate', 'Index\StudentIndexController@educate')->name('educate');

            Route::get('TuiTion', 'Index\StudentIndexController@tuition')->name('tuition');

            Route::get('Insurance', 'Index\StudentIndexController@insurance')->name('insurance');

            Route::get('Details','Index\StudentIndexController@detailMessage')->name('detail.message');

            Route::get('Message-Tuition/{id}','Index\StudentIndexController@messageTuition')->name('messageTuition');
        });

        Route::get('list-Recruitment','Index\StudentIndexController@listRecruitment')->name('listRecruitment');

        Route::get('Recruitment/{id}', 'Index\StudentIndexController@newRecruitment')->name('newRecruitment');
    });

    Route::group(['prefix' => 'Teacher','middleware'=>['only.teacher']], function () {
        Route::get('Payroll-lookup', 'Index\TeacherIndexController@search')->name('teacher.search');

        Route::post('search-result', 'Index\TeacherIndexController@postSearch')->name('postSearch');

        Route::group(['prefix' => 'Messages'], function () {
            Route::get('Educate', 'Index\TeacherIndexController@educate')->name('teacher.educate');

            Route::get('TuiTion', 'Index\TeacherIndexController@tuition')->name('teacher.tuition');

            Route::get('Insurance', 'Index\TeacherIndexController@insurance')->name('teacher.insurance');

            Route::get('Details','Index\TeacherIndexController@message')->name('teacher.message');

            Route::get('Message-Tuition','Index\TeacherIndexController@messageTuition')->name('teacher.messageTuition');
        });
    });

    Route::group(['prefix'=>'Old-Student','middleware'=>['only.oldStudent']], function(){
        Route::get('Form-Recruitment','Index\StudentIndexController@recruitment')->name('recruitment');

        Route::post('Post-Recruitment','Index\StudentIndexController@postRecruitment')->name('postRecruitment');
    });

    Route::group(['prefix'=>'Parent'],function(){
        Route::get('form-Look-up-learning-results-Parent', 'Index\ParentIndexController@search')->name('parent.search');

        Route::post('search-results-Parent', 'Index\ParentIndexController@postSearch')->name('parent.postSearch');
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

        Route::match(['get', 'post'],'import', 'Admin\StudentController@import')->name('Student.import');

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

        // Route::get('accept', 'Admin\PostController@accept')->name('accept');

        Route::get('form-insert-post','Admin\PostController@insert')->name('post.insert');

        Route::post('form-insert-post','Admin\PostController@store')->name('post.store');

        Route::get('acceptPost/{id}','Admin\PostController@acceptPost')->name('acceptPost');

        Route::get('delete/{id}','Admin\PostController@delete')->name('post.delete');

        Route::get('form-Update/{id}','Admin\PostController@getUpdate')->name('pots.getUpdate');

        Route::post('Post-Update/{id}','Admin\PostController@postUpdate')->name('pots.update');
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

