<?php

class BackendController extends BaseController {

    public function __construct()
    {
        View::share('currentUrl', Request::url());
    }
}