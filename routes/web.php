<?php

use Illuminate\Support\Facades\DB;
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
    return view('index');
});
Route::get('/tes', function () {
    $data = DB::table('articles_categories')->paginate(2);
    return view('test' , compact('data'));
});

Route::post('contact' , 'FrontEndController@contact');
Route::post('contactus2' , 'FrontEndController@contact2');
Route::get('gallery' , 'FrontEndController@gallery');
Route::get('downloadcv' , 'FrontEndController@download');

Route::get('/pagination', 'FrontEndController@pagination')->name('data.pagination');

Route::get('pagination/fetch_data', 'FrontEndController@fetch_data');
