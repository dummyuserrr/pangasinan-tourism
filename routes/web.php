<?php

Route::get('/', 'PagesController@index');
Route::get('the-province', 'PagesController@theProvince');
Route::get('tourism', 'PagesController@tourism');
Route::get('find-us', 'PagesController@findUs');
Route::post('the-province/{item}/fetch', 'DelicaciesController@fetch');
Route::post('contact-us', 'PagesController@contactUsSubmit');
// adminpanel

Route::get('admin-panel/auth/login', 'AdminPagesController@login')->middleware('checksessionreversed');
Route::post('admin-panel/auth/login', 'UserController@login')->middleware('checksessionreversed');
Route::middleware('checksession')->group(function () {

	Route::post('admin-panel/logout', 'UserController@logout');
		Route::get('admin-panel', 'AdminPagesController@index');
	Route::get('admin-panel/dashboard', 'AdminPagesController@index');

	// users	
	Route::get('admin-panel/users', 'AdminPagesController@users');
	Route::post('admin-panel/users', 'UserController@store');
	Route::delete('admin-panel/users/{item}/delete', 'UserController@destroy');
	Route::patch('admin-panel/users/{item}/update', 'UserController@patch');

	Route::get('admin-panel/posts', 'AdminPagesController@posts');
	Route::get('admin-panel/posts/new', 'AdminPagesController@posts_new');
	Route::get('admin-panel/posts/{post}/edit', 'AdminPagesController@posts_edit');

	// cities and municipalities
	Route::get('admin-panel/the-province/cities-and-municipalities', 'AdminPagesController@citymun');
	Route::post('admin-panel/the-province/cities-and-municipalities', 'CityMunController@store');
	Route::delete('admin-panel/the-province/cities-and-municipalities/{item}/delete', 'CityMunController@destroy');
	Route::patch('admin-panel/the-province/cities-and-municipalities/{item}/update', 'CityMunController@patch');

	// delicacies
	Route::get('admin-panel/the-province/delicacies', 'AdminPagesController@delicacies');
	Route::get('admin-panel/the-province/delicacies/new', 'AdminPagesController@delicacies_new');
	Route::post('admin-panel/the-province/delicacies/new', 'DelicaciesController@store');
	Route::delete('admin-panel/the-province/delicacies/{item}/delete', 'DelicaciesController@destroy');
	Route::get('admin-panel/the-province/delicacies/{item}', 'AdminPagesController@delicacies_view');
	Route::patch('admin-panel/the-province/delicacies/{item}/update', 'DelicaciesController@patch');
	Route::delete('admin-panel/the-province/delicacies/{item}/delete-image', 'DelicaciesController@image_destroy');

	// photo gallery
	Route::get('admin-panel/the-province/photo-gallery', 'AdminPagesController@photoGallery');
	Route::post('admin-panel/the-province/photo-gallery', 'GalleryPhotosController@store');
	Route::delete('admin-panel/the-province/photo-gallery/{item}/delete', 'GalleryPhotosController@destroy');
	Route::patch('admin-panel/the-province/photo-gallery/{item}/update', 'GalleryPhotosController@patch');

	// videos
	Route::get('admin-panel/the-province/videos', 'AdminPagesController@videos');
	Route::post('admin-panel/the-province/videos', 'VideosController@store');
	Route::patch('admin-panel/the-province/videos/{item}/update', 'VideosController@patch');
	Route::delete('admin-panel/the-province/videos/{item}/delete', 'VideosController@destroy');

	// contact us messages
	Route::get('admin-panel/contact-us-messages', 'AdminPagesController@contactUsMessages');
});