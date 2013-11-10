<?php

class DemoController extends BackendController {

	/*
	|--------------------------------------------------------------------------
	| Dashboard
	|--------------------------------------------------------------------------
	|
	|
	*/

	public function showPage($page='index')
	{
		return View::make("demos.$page");
	}

}