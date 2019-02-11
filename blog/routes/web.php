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

Route::get('/', 'PostController@index')->name('index');
Route::get('post/{id}', 'PostController@show')->name('post.show');
Route::resource('kategoris','KategoriController');
Route::get('/avatars/{filename}', function ($filename){
    $path = storage_path() . '/images/' . $filename;
    if(!File::exists($path)) abort(404);
    $file = File::get($path);
    $type = File::mimeType($path);
    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);
    return $response;
})->name('avatar');

Route::resource('/backend-admin', 'BackendController');

Auth::routes();

Route::resource('/test', 'TestinputController');
Route::get('/home', 'HomeController@index');

