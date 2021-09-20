<?php

use Illuminate\Support\Facades\Route;

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

Route::get('index', function () {
    return view('index_Chuan/index');
})->name('index');
Route::get('loginUser', 'LoginController@login')->name('login');
Route::prefix('ToanTin')->group(function () {
    Route::get('Khoa-hoc-may-tinh', 'ToanTinController@KH_maytinh')->name('KH_maytinh');
    Route::get('He-thong-thong-tin', 'ToanTinController@HT_thongTin')->name('HT_thongtin');
    Route::get('Cong-nghe-thong-tin', 'ToanTinController@CN_thongtin')->name('CN_thongtin');
    Route::get('Mang-may-tinh', 'ToanTinController@Mang_maytinh')->name('Mang_maytinh');
    Route::get('Toan-ung-dung', 'ToanTinController@Toan_ungdung')->name('Toan_ungdung');
    Route::get('Tri-tue-nhan-tao', 'ToanTinController@TT_nhantao')->name('TT_nhantao');
});
Route::prefix('KinhTe')->group(function () {
    Route::get('Ke-Toan', 'KinhTeController@Kinhte')->name('Kinhte');
    Route::get('Kinh-Te-Quoc-Te', 'KinhTeController@KT_quocte')->name('KT_quocte');
    Route::get('Logitics', 'KinhTeController@LOGITICS')->name('LOGITICS');
    Route::get('Luat-Kinh-Te', 'KinhTeController@Luat_kt')->name('Luat_kt');
    Route::get('Marketing', 'KinhTeController@Marketing')->name('Marketing');
    Route::get('Quan-Tri-Kinh-Doanh', 'KinhTeController@QT_kinhdoanh')->name('QT_kinhdoanh');
    Route::get('Tai-Chinh-Ngan-Hang', 'KinhTeController@TC_nganhang')->name('TC_nganhang');
});
Route::prefix('SucKhoe')->group(function () {
    Route::get('DieuDuong', 'SucKhoeController@DieuDuong')->name('DieuDuong');
    Route::get('DinhDuong', 'SucKhoeController@DinhDuong')->name('DinhDuong');
});
Route::prefix('NgoaiNgu')->group(function () {
    Route::get('Ngon-Ngu-Anh', 'NgoaiNguController@NN_ANH')->name('ANH');
    Route::get('Ngon-Ngu-Nhat', 'NgoaiNguController@NN_NHAT')->name('NHAT');
    Route::get('Ngon-Ngu-Han', 'NgoaiNguController@NN_HAN')->name('HAN');
    Route::get('Ngon-Ngu-Trung-Quoc', 'NgoaiNguController@NN_TQ')->name('TQ');
});
Route::prefix('XaHoi-NhanVan')->group(function () {
    Route::get('Cong-Tac-Xa-Hoi', 'XH_NVController@CT_xahoi')->name('CT_xahoi');
    Route::get('Viet-Nam-Hoc', 'XH_NVController@VN_hoc')->name('VN_hoc');
});
Route::prefix('TruyenThong')->group(function () {
    Route::get('Truyen-thong-da-phuong-tien', 'TruyenThongController@TT_daphuongtien')->name('TT_daphuongtien');

});
Route::prefix('DULICH')->group(function () {
    Route::get('Du-Lich-Lu-Hanh', 'DuLichController@DL_luhanh')->name('DL_luhanh');
});
Route::prefix('AMNHAC')->group(function () {
    Route::get('Thanh-Nhac', 'AmNhacController@ThanhNhac')->name('Thanhnhac');
});