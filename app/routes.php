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
   Route::get('{page?}', 'ContentController@showPage');
});

/*
|--------------------------------------------------------------------------
| Content routes
|--------------------------------------------------------------------------
*/
Route::get('eng/{page?}', 'ContentController@showEngPage');
Route::get('{page?}', 'ContentController@showPage');



