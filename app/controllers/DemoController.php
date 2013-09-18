<?php

class DemoController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Dashboard
	|--------------------------------------------------------------------------
	|
	|
	*/

	public function showPage($page='index')
	{
		$this->layout->currentUrl = Request::url();
		$this->layout->content = View::make("demos.$page");
	}

}