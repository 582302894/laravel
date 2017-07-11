<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
 */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
 */

//防止 SSX 攻击
Route::group(['middleware' => ['web']], function () {

    Route::any('index', ['uses' => "IndexController@index", 'as' => 'index']);
    Route::any('index/video/{id}', ['uses' => "IndexController@video"]);
    Route::any('index/picture/{id}', ['uses' => "IndexController@picture"]);
    Route::any('user/login', ['uses' => "IndexController@index", 'as' => 'user/login1']);
    Route::any('user/lists', ['uses' => "IndexController@lists", 'as' => 'user/lists']);
    Route::any('user/edit/{id}', ['uses' => "UserController@edit", 'as' => 'user/edit']);
    Route::any('resetpassword', ['uses' => "UserController@resetpassword", 'as' => 'resetpassword']);
    Route::any('forget', ['uses' => "UserController@forget", 'as' => 'forget']);

    Route::any('user/delete/{id}', ['uses' => "UserController@delete", 'as' => 'user/delete']);
    Route::any('user/create/{id?}', ['uses' => "UserController@create", 'as' => 'user/create']);
    Route::any('user/login', ['uses' => "UserController@login", 'as' => 'user/login']);
    Route::any('user/register', ['uses' => "UserController@register", 'as' => 'user/register']);
    Route::any('upload', ['uses' => "FileController@upload", 'as' => 'file/upload']);
    Route::any('uploadimg/{id?}', ['uses' => "FileController@uploadimg", 'as' => 'file/uploadimg']);
    Route::any('user/mailcode/{mail}', ['uses' => "UserController@mailcode"]);

    Route::any('mail/code/{mail}', ['uses' => "MailController@code"]);

    Route::any('/', function () {
        return redirect('index');
    });
    Route::any('spider/video', ['uses' => 'Spider\SpiderController@video']);
    Route::any('spider/picture', ['uses' => 'Spider\SpiderController@picture']);
    Route::any('spider/picturelists/{id}', ['uses' => 'Spider\SpiderController@picturelists']);
    Route::any('logout',['uses'=>'UserController@logout','logout']);

    Route::any('admin',['uses'=>'AdminController@lists']);
    Route::any('admin/picturelogs/{time?}',['uses'=>'AdminController@picturelogs']);
    Route::any('admin/picturelog/{dir}',['uses'=>'AdminController@picturelog']);


    Route::any('comment/1',['uses'=>'CommentController@list']);

});

// Route::any('user/login', function () {
//     return redirect('index');
// });

Route::any('mail/test', ['uses' => "MailController@test"]);
Route::any('welcome', function () {
    return view('welcome');
});
Route::any('header', function () {
    return view('basic.header');
});
Route::any('basic', function () {
    return view('basic.basic');
});

Route::any('footer', function () {
    return view('basic.header');
});

Route::any('/', function () {
    return redirect('index');
});
Route::any('public/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});

Route::any('spider/test', ['uses' => 'Spider\SpiderController@test']);
Route::any('spider/tout/video', ['uses' => 'Spider\ToutController@video']);
Route::any('music',['uses'=>'Spider\MusicController@music','music']);


Route::any('sunhaobo',['uses'=>'ShbController@index']);