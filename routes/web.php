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
use App\Category;

Route::get('/', function () {
    return view('welcome');
});

Route::get('thu', function(){
	$category = Category::find(1);
	foreach ($category->typenews as $typenews) {
		echo $typenews->name."<br>";
	}
});

Route::get('admin/login', 'UserController@getLoginAdmin');
Route::post('admin/login', 'UserController@postLoginAdmin');
Route::get('admin/logout', 'UserController@getLogoutAdmin');

Route::group(['prefix'=>'admin', 'middleware'=>'adminLogin'], function(){

	Route::group(['prefix'=>'category'], function(){
		//admin/category/add
		Route::get('list', 'CategoryController@getList');

		Route::get('add', 'CategoryController@getAdd');
		Route::post('add', 'CategoryController@postAdd');

		Route::get('edit/{id}', 'CategoryController@getEdit');
		Route::post('edit/{id}', 'CategoryController@postEdit');

		Route::get('delete/{id}','CategoryController@getDelete');
	});

	Route::group(['prefix'=>'typenews'], function(){
		//admin/typenews/add
		Route::get('list', 'TypenewsController@getList');

		Route::get('add', 'TypenewsController@getAdd');
		Route::post('add', 'TypenewsController@postAdd');

		Route::get('edit/{id}', 'TypenewsController@getEdit');
		Route::post('edit/{id}', 'TypenewsController@postEdit');

		Route::get('delete/{id}','TypenewsController@getDelete');
	});

	Route::group(['prefix'=>'news'], function(){
		//admin/news/add
		Route::get('list', 'NewsController@getList');

		Route::get('add', 'NewsController@getAdd');
		Route::post('add', 'NewsController@postAdd');

		Route::get('edit/{id}', 'NewsController@getEdit');
		Route::post('edit/{id}', 'NewsController@postEdit');

		Route::get('delete/{id}','NewsController@getDelete');
	});

	Route::group(['prefix'=>'user'], function(){
		//admin/user/add
		Route::get('list', 'UserController@getList');

		Route::get('add', 'UserController@getAdd');
		Route::post('add', 'UserController@postAdd');

		Route::get('edit/{id}', 'UserController@getEdit');
		Route::post('edit/{id}', 'UserController@postEdit');

		Route::get('delete/{id}','UserController@getDelete');
	});

	Route::group(['prefix'=>'slide'], function(){
		//admin/slide/add
		Route::get('list', 'SlideController@getList');

		Route::get('add', 'SlideController@getAdd');
		Route::post('add', 'SlideController@postAdd');

		Route::get('edit', 'SlideController@getEdit');
		Route::post('add', 'SlideController@postAdd');

	});

	Route::group(['prefix'=>'ajax'], function(){
		Route::get('typenews/{id_category}','AjaxController@getTypenews');
		
	});


});

Route::get('trangchu', function(){
	return view('pages.trangchu');
});




