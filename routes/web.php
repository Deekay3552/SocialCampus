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

Route::get('/', "HomeController@index")->name('home');
Auth::routes();

Route::get('createpost', function(){
  return view('ayush.createPost');
});
Route::get('profile/{id}', "HomeController@viewProfile")->name('profile.view');
Route::get('fullpost',function() {
  return view('ayush.fullpost');
});
Route::get('setting',function() {
    return view('Dhananjay.setting');
});
Route::get('conversation',function(){
    return view('Dhananjay.conversation');
});
