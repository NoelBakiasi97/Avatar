<?php

use Illuminate\Support\Facades\Route;


//WELCOME
Route::get('/', 'WelcomeController@index')->name('welcome');




//USER
Route::get('/user', 'UserController@index')->name('user');

Route::get('/ajoutUser', 'UserController@create')->name('createUser');
Route::post('/saveUser', 'UserController@store')->name('saveUser');

Route::get('/editUser/{id}', 'UserController@edit')->name('editUser');
Route::post('/updateUser/{id}', 'UserController@update')->name('updateUser');

Route::get('/deleteUser/{id}', 'UserController@destroy')->name('deleteUser');





//AVATAR
Route::get('/avatar', 'AvatarController@index')->name('avatar');

Route::get('/ajoutAvatar', 'AvatarController@create')->name('createAvatar');
Route::post('/saveAvatar', 'AvatarController@store')->name('saveAvatar');

Route::get('/editAvatar/{id}', 'AvatarController@edit')->name('editAvatar');
Route::post('/updateAvatar/{id}', 'AvatarController@update')->name('updateAvatar');

Route::get('/deleteAvatar/{id}', 'AvatarController@destroy')->name('deleteAvatar');





//CATEGORIE
Route::get('/categorie', 'CategorieController@index')->name('categorie');

Route::get('/ajoutCategorie', 'CategorieController@create')->name('createCategorie');
Route::post('/saveCategorie', 'CategorieController@store')->name('saveCategorie');

Route::get('/editCategorie/{id}', 'CategorieController@edit')->name('editCategorie');
Route::post('/updateCategorie/{id}', 'CategorieController@update')->name('updateCategorie');

Route::get('/showImage/{id}','CategorieController@show')->name('showImage');

Route::get('/deleteCategorie/{id}', 'CategorieController@destroy')->name('deleteCategorie');





//IMAGE
Route::get('/image', 'ImageController@index')->name('image');

Route::get('/ajoutImage', 'ImageController@create')->name('createImage');
Route::post('/saveImage', 'ImageController@store')->name('saveImage');

Route::get('/editImage/{id}', 'ImageController@edit')->name('editImage');
Route::post('/updateImage/{id}', 'ImageController@update')->name('updateImage');

Route::get('/deleteImage/{id}', 'ImageController@destroy')->name('deleteImage');