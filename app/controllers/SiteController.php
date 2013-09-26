<?php

class SiteController extends BaseController {

	public function showLogin()
	{
        $this->layout = View::make("site.login");
        $this->layout->extend = 'layouts.empty';
	}

}