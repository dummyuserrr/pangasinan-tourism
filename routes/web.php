<?php

Route::get('/', 'PagesController@index');
Route::get('the-province', 'PagesController@theProvince');
Route::get('tourism', 'PagesController@tourism');
Route::get('find-us', 'PagesController@findUs');
Route::post('the-province/delicacies/{item}/fetch', 'DelicaciesController@fetch');
Route::post('the-province/cities-and-municipalities/{item}/fetch', 'CityMunController@fetch');
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
	Route::patch('admin-panel/account-settings', 'AdminPagesController@accountSettings');

	Route::patch('account-settings', 'UserController@patch_me');

	Route::get('admin-panel/posts', 'AdminPagesController@posts');
	Route::get('admin-panel/posts/new', 'AdminPagesController@posts_new');
	Route::get('admin-panel/posts/{post}/edit', 'AdminPagesController@posts_edit');

	// cities and municipalities
	Route::get('admin-panel/the-province/cities-and-municipalities', 'AdminPagesController@citymun');
	Route::get('admin-panel/the-province/cities-and-municipalities/new', 'AdminPagesController@citymun_new');
	Route::get('admin-panel/the-province/cities-and-municipalities/{item}', 'AdminPagesController@citymun_view');
	Route::delete('admin-panel/the-province/cities-and-municipalities/image/{item}/delete', 'CityMunController@destroy_image');
	Route::post('admin-panel/the-province/cities-and-municipalities/new', 'CityMunController@store');
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

	// tourist attractions
	Route::get('admin-panel/tourism/tourist-attractions', 'AdminPagesController@touristAttractions');
	Route::get('admin-panel/tourism/tourist-attractions/new', 'AdminPagesController@touristAttractions_new');
	Route::post('admin-panel/tourism/tourist-attractions/new', 'TouristAttractionsController@store');
	Route::delete('admin-panel/tourism/tourist-attractions/{item}/delete', 'TouristAttractionsController@destroy');
	Route::get('admin-panel/tourism/tourist-attractions/{item}', 'AdminPagesController@touristAttractions_view');
	Route::patch('admin-panel/tourism/tourist-attractions/{item}/update', 'TouristAttractionsController@patch');
	Route::delete('admin-panel/tourism/tourist-attractions/{item}/delete-image', 'TouristAttractionsController@image_destroy');

	// festivals
	Route::get('admin-panel/tourism/festivals', 'AdminPagesController@festivals');
	Route::get('admin-panel/tourism/festivals/new', 'AdminPagesController@festivals_new');
	Route::post('admin-panel/tourism/festivals/new', 'FestivalsController@store');
	Route::delete('admin-panel/tourism/festivals/{item}/delete', 'FestivalsController@destroy');
	Route::get('admin-panel/tourism/festivals/{item}', 'AdminPagesController@touristAttractions_view');
	Route::patch('admin-panel/tourism/festivals/{item}/update', 'FestivalsController@patch');
	Route::delete('admin-panel/tourism/festivals/{item}/delete-image', 'FestivalsController@image_destroy');

	// contact us messages
	Route::get('admin-panel/contact-us-messages', 'AdminPagesController@contactUsMessages');
	Route::delete('admin-panel/contact-us-messages/{item}/delete', 'ContactUsMessagesController@destroy');
});