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

// Route::get('/', function () {
//     return view('welcome');
// });

// お店一覧
Route::get('/list', 'gourmet_list\GourmetListController@index')->name("");

// お店編集
Route::get('/edit/{ID}', 'gourmet_edit\GourmetEditController@index')->name("");

// お店詳細
Route::get('/detail/{ID}', 'gourmet_detail\GourmetDetailController@index')->name("");