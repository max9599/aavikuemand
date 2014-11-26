<?php

/*
|--------------------------------------------------------------------------
| Content controller
| Show all content related pages
|--------------------------------------------------------------------------
*/
class ContentController extends BaseController {
	public function showPage($page = 'index') {
		$page = utf8_decode($page);
		return View::make("content.$page");
	}
}
