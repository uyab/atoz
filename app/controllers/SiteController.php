<?php

class SiteController extends BaseController {

	public function getLogin()
	{
        // $this->layoutFile = 'layouts.front';
        return View::make("site.login");
	}

    public function postLogin()
    {
        $user = array(
            'username' => Input::get('username'),
            'password' => Input::get('password')
        );
        if (Auth::attempt($user, Input::get('remember'))) {
            return Redirect::route('home')
                ->with('flash_notice', 'You are successfully logged in.');
        }

        // authentication failure! lets go back to the login page
        return Redirect::route('login')
            ->with('flash_error', 'Your username/password combination was incorrect.')
            ->withInput();
    }

    public function postRegister()
    {

        $validator = Validator::make(Input::all(), array(
            "username"              => "required|unique:users,username",
            "email"                 => "required|email|unique:users,email",
            "password"              => "required|min:6",
            "password_confirmation" => "same:password",
        ));

        if($validator->passes())
        {
            $user = new User;
            $user->username = Input::get('username');
            $user->email    = Input::get('email');
            $user->password = Hash::make(Input::get('password'));
            $user->save();

            Auth::login($user);
            return Redirect::route("home");
        }
        else
        {
            return Redirect::route('login')
                ->withErrors($validator)
                ->withInput();
        }

    }

    public function getLogout()
    {
        Auth::logout();
        return Redirect::route('login')
            ->with('flash_notice', 'You are successfully logged out.');
    }

    public function getPasswordReminder()
    {
        return View::make("site.reminder");
    }

    public function postPasswordReminder()
    {
        $validator = Validator::make(Input::all(), array(
            "email" => "required|email|exists:users,email"
        ));

        if ($validator->passes())
        {
            $credentials = array(
                "email" => Input::get("email")
            );

            Password::remind($credentials,
                function($message, $user)
                {
                    $message->from("uyab.exe@gmail.com");
                }
            );

            return Redirect::route("getPasswordReminder");
        }
        else
        {
            return Redirect::route("getPasswordReminder")->withErrors($validator);
        }
    }

    public function getPasswordReset($token)
    {
        return View::make("site.password.reset")->with(compact('token'));
    }

    public function postPasswordReset()
    {
        $token = Input::get('token');

        $validator = Validator::make(Input::all(), array(
            "email"                 => "required|email|exists:password_reminders,email",
            "password"              => "required|min:6",
            "password_confirmation" => "same:password",
            "token"                 => "exists:password_reminders,token"
        ));

        if ($validator->passes())
        {
            $credentials = array(
                "email" => Input::get("email")
            );

            return Password::reset($credentials,
                function($user, $password)
                {
                    $user->password = Hash::make($password);
                    $user->save();

                    Auth::login($user);
                    return Redirect::route("home");

                }

            );
        }
        else
        {
            return Redirect::route('getPasswordReset', array($token))
            ->withInput()
            ->withErrors($validator);
        }
    }
}