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
Route::group(['prefix' => '/', 'namespace' => 'Client'], function() {
	Route::get('/', 'HomeController@getHome');

	//Login
	Route::group(['prefix' => 'loginClient', 'middleware' => 'CheckLoginClient'], function() {
		Route::get('/', 'LoginClientController@getLogin');
		Route::post('/', 'LoginClientController@postLogin');
	});

	//client
	route::group(['prefix' => 'client', 'middleware' => 'CheckLogOutClient'], function() {
		Route::get('/', 'ClientController@getClient');
		Route::get('/logout', 'ClientController@getLogout');
	});

	//register
	Route::group(['prefix' => 'register'], function() {
		Route::get('/', 'ClientController@getRegister');
	});
});

Route::group(['namespace'=>'Admin'],function(){
//phần login
	Route::group(['prefix' => 'login','middleware'=>'CheckLogIn'], function(){
		Route::get('/', 'LoginController@getLogin');
		Route::post('/', 'LoginController@postLogin');

	});
//phần logout
	Route::get('logout','LoginController@getLogout');

	Route::group(['prefix'=>'admin','middleware'=>'CheckLogOut'],function(){
		Route::get('home', 'AdminController@getAdmin');

//user		
		Route::group(['prefix'=>'user'],function(){
			Route::get('/','UserController@getuser');
			
			Route::get('list/{id}','UserController@getlistuser');

			Route::get('adduser','UserController@getAddUser');
			Route::post('adduser','UserController@postAddUser');

			Route::get('edit/{id}','UserController@getEditUser');
			Route::post('edit/{id}','UserController@postEditUser');

			Route::get('deluser/{id}','UserController@getDelUser');

			//role
			Route::get('role','RoleController@getRole');

			Route::get('addrole','RoleController@getAddRole');
			Route::post('addrole','RoleController@postAddRole');

			Route::get('editrole/{id}','RoleController@getEditRole');
			Route::post('editrole/{id}','RoleController@postEditRole');
			Route::get('del/{id}','RoleController@getDelRole');
		});
//khoa
		Route::group(['prefix'=>'cate'],function(){
			Route::get('/','CategoryController@getCate');

			Route::get('add','CategoryController@getAddCate');
			Route::post('add','CategoryController@postAddCate');

			Route::get('edit/{id}','CategoryController@getEditCate');
			Route::post('edit/{id}','CategoryController@postEditCate');

			Route::get('del/{id}','CategoryController@getDelCate');
		});
//danh mục thuốc
		Route::group(['prefix'=>'catedrug'],function(){
			Route::get('/','CatedrugController@getCateDrug');

			Route::get('add','CatedrugController@getAddCateDrug');
			Route::post('add','CatedrugController@postAddCateDrug');

			Route::get('edit/{id}','CatedrugController@getEditCateDrug');
			Route::post('edit/{id}','CatedrugController@postEditCateDrug');

			Route::get('del/{id}','CatedrugController@getDelCateDrug');
		});
// thuốc
		Route::group(['prefix'=>'drug'],function(){
			Route::get('/','DrugController@getDrug');


			Route::get('list/{id}','DrugController@getlistdrug');

			Route::get('add','DrugController@getAddDrug');
			Route::post('add','DrugController@postAddDrug');

			Route::get('edit/{id}','DrugController@getEditDrug');
			Route::post('edit/{id}','DrugController@postEditDrug');

			Route::get('del/{id}','DrugController@getDelDrug');
		});
//khách hàng
		Route::group(['prefix'=>'client'],function(){
			Route::get('/','ClientController@getClient');

			// Route::get('edit/{id}','ClientController@geteditCli');
			// Route::get('post/{id}','ClientController@postditCli');

			Route::get('send/{id}','ClientController@getsend');
			Route::post('send/{id}','ClientController@postsend'); //gửi email


			Route::get('del/{id}','ClientController@getDelClient');
		});
//dịch vụ	
		Route::group(['prefix'=>'service'],function(){
			Route::get('/','ServiceController@getService');

			Route::get('add','ServiceController@getAddService');
			Route::post('add','ServiceController@posrAddService');
		});
	});

});
	
