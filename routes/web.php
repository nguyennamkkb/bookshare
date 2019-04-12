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
Route::group(['prefix'=>'/'],function ()
{
	Route::get('','PageController@trangchu');
	Route::get('product/{id}/detail','customer\ProductController@detail');
	Route::get('category/{id}','PageController@getCategory');
	Route::get('booksharecus/{id}','customer\BookshareController@bookshop');

	Route::group(['prefix'=>'cart'],function(){
		Route::get('add/{id}','CartController@getAddCart');
		Route::get('show','CartController@getshowCart');
		Route::post('show','CartController@cartComplete');
		Route::get('update','CartController@getUpdateCart');
		Route::get('delete/{id}','CartController@deleteCart');
		Route::get('checkout','CartController@checkout');
		Route::post('checkout','CartController@postcheckout');
	});

	Route::group(['middleware'=>'customer'],function ()
	{
		Route::get('profile/{id}/detail','customer\ProfileController@profile');
		Route::resource('customer/sharebook','customer\BookshareController');
		Route::patch('customer/reviewct/{id}','customer\ProductController@postReview');
		Route::get('customer/myorder','BillController@getMyOder');

	});


	Route::group(['prefix'=>'admin','middleware'=>'Authenticated'],function(){
		Route::get('','Admin\AdminController@index');
		Route::resource('category','CategoryController');
		Route::get('themcate','CategoryController@themcate');
		
		
		Route::resource('product','ProductController');
		Route::get('product/{id}/check','ProductController@check');
		Route::resource('category','CategoryController');
		Route::resource('publisher','PublisherController');
		Route::get('themnxb','PublisherController@themnxb');
		Route::resource('status-od','Status_OrderController');
		Route::resource('status-pro','Status_proController');
		Route::resource('author','AuthorController');
		Route::get('themtg','AuthorController@themtacgia');
		Route::resource('role','RoleController');
		Route::resource('role-user','Role_userController');
		Route::resource('evaluate','EvaluateController');
		Route::resource('comment','CommentController');
		Route::resource('image','ImageController');
		Route::resource('user','Admin\UserController');
		Route::resource('detail','UserdetailController');
		Route::resource('product','ProductController');
		Route::get('user/{id}/detail','Admin\UserController@detail');
		Route::get('product/{id}/detail','ProductController@detail');
		Route::get('checkout','ProductController@checkout');
		Route::resource('bill','Admin\BillController');

	});
});

Auth::routes();