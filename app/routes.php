<?php
/*
|--------------------------------------------------------------------------
| Admin routes
|--------------------------------------------------------------------------
*/
Route::group(array('prefix' => 'admin', 'before' => 'auth'), function()
{ 
   Route::get('{page?}', 'AdminController@showPage');
});

/*
|--------------------------------------------------------------------------
| Shop routes
|--------------------------------------------------------------------------
*/
Route::group(array('prefix' => 'pood'), function()
{
	Route::get('ostukorv', 'ShopController@showCart');
    Route::get('{page?}', 'ShopController@showPage');
});

/*
|--------------------------------------------------------------------------
| Content routes
|--------------------------------------------------------------------------
*/
Route::get('eng/{page?}', 'ContentController@showEngPage');
Route::get('{page?}', 'ContentController@showPage');



