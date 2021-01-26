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


Auth::routes();

Route::get('/', function() {
    return redirect('/home');
});

Route::get('/welcome', function() {
    return view('welcome');
})->name('welcome');

Route::get('/login', function() {
    return redirect('/welcome');
})->name('login');


// normal user
Route::middleware(['auth'])->group(function () {
    Route::get('/home', 'HomeController@index');
});


// admin
Route::get('/admin_home', function() {
    return view('admin.welcome');
})->name('admin_home');

Route::middleware(['auth.admin'])->group(function() {
    Route::get('/dashboard', 'Admin\DashboardController@index')->name('dashboard');
    Route::get('/users', 'Admin\DashboardController@index');
});

// session...
Route::post('/update_session', 'Admin\DashboardController@updateSession');
Route::get('/get_session', 'Admin\DashboardController@getSession');

// message...
Route::post('/send_message', 'HomeController@sendMessage');
Route::post('/message_to_approve/{message_id}', 'Admin\DashboardController@messageToApprove');
Route::post('/message_to_disapprove/{message_id}', 'Admin\DashboardController@messageToDisapprove');
Route::post('/message_to_disapprove/{message_id}', 'Admin\DashboardController@messageToDisapprove');
Route::post('/message_answer/{message_id}', 'Admin\DashboardController@messageAnswer');
Route::get('/get_message/{status}/{per_page}/{page_num}', 'Admin\DashboardController@getMessage');
Route::get('/get_users/{per_page}/{page_num}', 'Admin\DashboardController@getUsers');
Route::get('get_message_detail/{message_id}', 'Admin\DashboardController@getMessageDetail');

Route::post('userfile_upload', 'Admin\DashboardController@uploadUserList');
