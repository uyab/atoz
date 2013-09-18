<?php

class LoginController extends BaseController {


	protected $layout = 'layouts.empty';

	public function showIndex()
	{
		$this->layout->content = View::make("demos.login");
	}

}