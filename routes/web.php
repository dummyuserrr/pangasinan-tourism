<?php

Route::get('/', 'PagesController@index');
Route::get('the-province', 'PagesController@theProvince');
Route::get('tourism', 'PagesController@tourism');
Route::get('find-us', 'PagesController@findUs');

// adminpanel

Route::get('admin-panel/auth/login', 'AdminPagesController@login')->middleware('checksessionreversed');
Route::post('admin-panel/auth/login', 'UserController@login')->middleware('checksessionreversed');
Route::middleware('checksession')->group(function () {
	Route::post('admin-panel/logout', 'UserController@logout');
   	Route::get('admin-panel', 'AdminPagesController@index');
	Route::get('admin-panel/dashboard', 'AdminPagesController@index');
	Route::get('admin-panel/users', 'AdminPagesController@users');
	Route::get('admin-panel/posts', 'AdminPagesController@posts');
	Route::get('admin-panel/posts/new', 'AdminPagesController@posts_new');
	Route::get('admin-panel/posts/{post}/edit', 'AdminPagesController@posts_edit');
	Route::get('admin-panel/the-province/cities-and-municipalities', 'AdminPagesController@citymun');
	Route::post('admin-panel/the-province/cities-and-municipalities', 'CityMunController@store');
	Route::delete('admin-panel/the-province/cities-and-municipalities/{item}/delete', 'CityMunController@destroy');
});