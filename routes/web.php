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
	foreach ($category->type_news as $type_news) {
		echo $type_news->name."<br>";
	}
});


Route::group(['prefix'=>'admin'], function(){

	Route::group(['prefix'=>'category'], function(){
		//admin/category/add
		Route::get('list', 'CategoryController@getList');

		Route::get('add', 'CategoryController@getAdd');
		Route::post('add', 'CategoryController@postAdd');

		Route::get('edit', 'CategoryController@getEdit');
	});

	Route::group(['prefix'=>'type_news'], function(){
		//admin/type_news/add
		Route::get('list', 'Type_newsController@getList');

		Route::get('add', 'Type_newsController@getAdd');

		Route::get('edit', 'Type_newsController@getEdit');
	});

	Route::group(['prefix'=>'news'], function(){
		//admin/news/add
		Route::get('list', 'NewsController@getList');

		Route::get('add', 'TinTucController@getAdd');

		Route::get('edit', 'TinTucController@getEdit');
	});

	Route::group(['prefix'=>'user'], function(){
		//admin/user/add
		Route::get('list', 'UserController@getList');

		Route::get('add', 'UserController@getAdd');

		Route::get('edit', 'UserController@getEdit');
	});

	Route::group(['prefix'=>'slide'], function(){
		//admin/slide/add
		Route::get('list', 'SlideController@getList');

		Route::get('add', 'SlideController@getAdd');

		Route::get('edit', 'SlideController@getEdit');

	});


});



