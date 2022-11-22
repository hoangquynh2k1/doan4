<?php

use App\Http\Controllers\cthdbancontroller;
use App\Http\Controllers\cthdnhapcontroller;
use App\Http\Controllers\dong_spcontroller;
use App\Http\Controllers\giacontroller;
use App\Http\Controllers\hdbancontroller;
use App\Http\Controllers\hdnhapcontroller;
use App\Http\Controllers\khach_hangcontroller;
use App\Http\Controllers\loai_spcontroller;
use App\Http\Controllers\newscontroller;
use App\Http\Controllers\nha_cung_capcontroller;
use App\Http\Controllers\nhan_viencontroller;
use App\Http\Controllers\spcontroller;
use App\Models\cthdnhap;
use App\Models\khach_hang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::resource('nhan_vien',nhan_viencontroller::class);
Route::resource('sp',spcontroller::class);
Route::resource('nha_cung_cap',nha_cung_capcontroller::class);
Route::resource('news',newscontroller::class);
Route::resource('loai_sp',loai_spcontroller::class);
Route::resource('khach_hang',khach_hangcontroller::class);
Route::resource('hdnhap',hdnhapcontroller::class);
Route::resource('hdban',hdbancontroller::class);
Route::resource('gia',giacontroller::class);
Route::resource('dong_sp',dong_spcontroller::class);
Route::resource('cthdnhap',cthdnhapcontroller::class);
Route::resource('cthdban',cthdbancontroller::class);
Route::resource('cthdban',cthdbancontroller::class);
Route::get('sp/getIdDong/{id}', [spcontroller::class, 'getIdDong']);
Route::get('sp/getIdLoai/{id}', [spcontroller::class, 'getIdLoai']);
Route::get('dong_sp/getLoaiSP/{id}', [dong_spcontroller::class, 'getLoaiSP']);
Route::get('cthdban/getIdHDon/{id}', [cthdbancontroller::class, 'getIdHDon']);
Route::get('cthdban/show2/', [cthdbancontroller::class, 'show2']);
Route::put('cthdban/update/', [cthdbancontroller::class, 'update']);
Route::put('hdban/update/', [hdbancontroller::class, 'update']);
Route::post('uploadfile', function(Request $request) {
    if($request->hasFile('filename')){
        $file = $request->file('filename');
        $destinationPath = 'img/';
        $file->move($destinationPath,$file->getClientOriginalName());
        // return back();
    }
    return back();
})->name('uploadfile');