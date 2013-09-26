<?php

class SiteController extends BaseController {

	public function showLogin()
	{
        $this->layout = View::make("site.login");
        $this->layout->extend = 'layouts.empty';
	}

    public function actionLogin()
    {
        $user = array(
            'username' => Input::get('username'),
            'password' => Input::get('password')
        );
        if (Auth::attempt($user)) {
            return Redirect::to('demo/dashboard-git')
                ->with('flash_notice', 'You are successfully logged in.');
        }

        // authentication failure! lets go back to the login page
        return Redirect::to('login')
            ->with('flash_error', 'Your username/password combination was incorrect.')
            ->withInput();
    }

    public function actionLogout()
    {
        Auth::logout();
        return Redirect::route('login')
            ->with('flash_notice', 'You are successfully logged out.');
    }

}