<?php

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
    return view('welcome');
});
Route::get('KhoaHoc',function(){
	return "Xin chào các bạn ";
});
Route::get('mylove/crush' , function (){
	echo "Bùi Thị Quyên";
});

//truyền tham số trên route
Route::get('mylove/{name}', function ($name){
	echo "My love is : ".$name;
});
Route::get('mylove/{name}/{age}', function ($name,$age){
	echo "My love is : ".$name;
	echo "<br>Tuổi : ".$age;
});

//truyền tham số mặc định
Route::get('mylove/{name}', function ($name = 'Bùi Thị Quyên'){
	echo "My love is : ".$name;
});
//định danh cho route
Route::get('trang-dich', function (){
	echo "Đây là trang đích";
})->name('dich');
Route::get('trang-nguon', function (){
	return redirect()->route('add');//giống với header trong php
	//cách 2
	//return redirect('trang-dich');
});

Route::group(['prefix' => 'product'], function(){
	Route::get('add', function(){ echo "Đây là trang thêm sản phẩm " ; })->name('add');
	Route::get('edit', function(){ echo "Đây là trang sửa sản phẩm " ; });
	Route::get('list', function(){ echo "Đây là trang danh sách  sản phẩm " ; });
});


