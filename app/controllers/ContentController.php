<?php

/*
|--------------------------------------------------------------------------
| Content controller
| Show all content related pages
|--------------------------------------------------------------------------
*/
class ContentController extends BaseController {
	public function showPage($page = 'index') {
		$lang = 'est';
		$page = utf8_decode($page);
		return View::make("content.est.$page") -> withLang('est');
	}

	public function showEngPage($page = 'index') {
		$page = utf8_decode($page);
		return View::make("content.eng.$page") -> withLang('eng');
	}
}
