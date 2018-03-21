<?php

Route::get('/', 'PagesController@index');
Route::get('the-province', 'PagesController@theProvince');
Route::get('tourism', 'PagesController@tourism');
Route::get('find-us', 'PagesController@findUs');
Route::post('tourism/delicacies/{item}/fetch', 'DelicaciesController@fetch');
Route::post('tourism/cafe-and-restaurants/{item}/fetch', 'CafeAndRestaurantsController@fetch');
Route::post('the-province/cities-and-municipalities/{item}/fetch', 'CityMunController@fetch');
Route::post('tourism/tourist-attractions/{item}/fetch', 'TouristAttractionsController@fetch');
Route::post('the-province/festivals/{item}/fetch', 'FestivalsController@fetch');
Route::post('tourism/events/{item}/fetch', 'EventsController@fetch');
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
	Route::get('admin-panel/tourism/delicacies', 'AdminPagesController@delicacies');
	Route::get('admin-panel/tourism/delicacies/new', 'AdminPagesController@delicacies_new');
	Route::post('admin-panel/tourism/delicacies/new', 'DelicaciesController@store');
	Route::delete('admin-panel/tourism/delicacies/{item}/delete', 'DelicaciesController@destroy');
	Route::get('admin-panel/tourism/delicacies/{item}', 'AdminPagesController@delicacies_view');
	Route::patch('admin-panel/tourism/delicacies/{item}/update', 'DelicaciesController@patch');
	Route::delete('admin-panel/tourism/delicacies/{item}/delete-image', 'DelicaciesController@image_destroy');

	// cafe and restaurants
	Route::get('admin-panel/tourism/cafe-and-restaurants', 'AdminPagesController@cafeAndRestaurants');
	Route::get('admin-panel/tourism/cafe-and-restaurants/new', 'AdminPagesController@cafeAndRestaurants_new');
	Route::post('admin-panel/tourism/cafe-and-restaurants/new', 'CafeAndRestaurantsController@store');
	Route::delete('admin-panel/tourism/cafe-and-restaurants/{item}/delete', 'CafeAndRestaurantsController@destroy');
	Route::get('admin-panel/tourism/cafe-and-restaurants/{item}', 'AdminPagesController@cafeAndRestaurants_view');
	Route::patch('admin-panel/tourism/cafe-and-restaurants/{item}/update', 'CafeAndRestaurantsController@patch');
	Route::delete('admin-panel/tourism/cafe-and-restaurants/{item}/delete-image', 'CafeAndRestaurantsController@image_destroy');

	// most visited
	Route::get('admin-panel/most-visiteds', 'AdminPagesController@mostVisited');
	Route::get('admin-panel/most-visiteds/new', 'AdminPagesController@mostVisited_new');
	Route::post('admin-panel/most-visiteds/new', 'MostVisitedController@store');
	Route::delete('admin-panel/most-visiteds/{item}/delete', 'MostVisitedController@destroy');
	Route::get('admin-panel/most-visiteds/{item}', 'AdminPagesController@mostVisited_view');
	Route::patch('admin-panel/most-visiteds/{item}/update', 'MostVisitedController@patch');
	Route::delete('admin-panel/most-visiteds/{item}/delete-image', 'MostVisitedController@image_destroy');

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
	Route::get('admin-panel/the-province/festivals', 'AdminPagesController@festivals');
	Route::get('admin-panel/the-province/festivals/new', 'AdminPagesController@festivals_new');
	Route::post('admin-panel/the-province/festivals/new', 'FestivalsController@store');
	Route::delete('admin-panel/the-province/festivals/{item}/delete', 'FestivalsController@destroy');
	Route::get('admin-panel/the-province/festivals/{item}', 'AdminPagesController@touristAttractions_view');
	Route::patch('admin-panel/the-province/festivals/{item}/update', 'FestivalsController@patch');
	Route::delete('admin-panel/the-province/festivals/{item}/delete-image', 'FestivalsController@image_destroy');

	Route::get('admin-panel/the-province/festivals/{item}', 'AdminPagesController@festivals_view');
	Route::patch('admin-panel/the-province/festivals/{item}/update', 'FestivalsController@patch');
	Route::delete('admin-panel/the-province/festivals/{item}/delete-image', 'FestivalsController@image_destroy');

	// events
	Route::get('admin-panel/tourism/events', 'AdminPagesController@events');
	Route::get('admin-panel/tourism/events/new', 'AdminPagesController@events_new');
	Route::post('admin-panel/tourism/events/new', 'EventsController@store');
	Route::delete('admin-panel/tourism/events/{item}/delete', 'EventsController@destroy');
	Route::get('admin-panel/tourism/events/{item}', 'AdminPagesController@events_view');
	Route::patch('admin-panel/tourism/events/{item}/update', 'EventsController@patch');
	Route::delete('admin-panel/tourism/events/{item}/delete-image', 'EventsController@image_destroy');

	// contact us messages
	Route::get('admin-panel/contact-us-messages', 'AdminPagesController@contactUsMessages');
	Route::delete('admin-panel/contact-us-messages/{item}/delete', 'ContactUsMessagesController@destroy');
});