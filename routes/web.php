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

Route::get('/', function () {
    return view('/user/index');
});
Route::get('/login', function () {
    return view('/user/login');
});
Route::get('/account', function () {
    return view('/user/user');
});
Route::get('/a', function () {
    return view('/user/abc');
});
Route::get('/cart', function () {
    return view('/user/cart');
});
Route::get('/checkout', function () {
    return view('/user/checkout');
});
Route::get('/blog', function () {
    return view('/user/blog');
});
Route::get('/products', function () {
    return view('/user/products');
});
Route::get('/product-detail', function () {
    return view('/user/product-detail');
});
Route::get('/login', function () {
    return view('/user/login');
});
Route::get('/admin', function () {   return view('admin/index'); });
Route::get('/admin/nhan_vien',function(){    return view('admin/nhan_vien');});
Route::get('/admin/sp',function(){    return view('admin/sp');});
Route::get('/admin/nha_cung_cap',function(){    return view('admin/nha_cung_cap');});
Route::get('/admin/news',function(){    return view('admin/news');});
Route::get('/admin/loai_sp',function(){    return view('admin/loai_sp');});
Route::get('/admin/khach_hang',function(){    return view('admin/khach_hang');});
Route::get('/admin/hdnhap',function(){    return view('admin/hdnhap');});
Route::get('/admin/hdban',function(){    return view('admin/hdban');});
Route::get('/admin/gia',function(){    return view('admin/gia');});
Route::get('/admin/dong_sp',function(){    return view('admin/dong_sp');});
Route::get('/admin/cthdnhap',function(){    return view('admin/cthdnhap');});
Route::get('/admin/cthdban',function(){    return view('admin/cthdban');});
?>
