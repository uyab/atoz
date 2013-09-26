<?php

/*
|--------------------------------------------------------------------------
| Application & Route Filters
|--------------------------------------------------------------------------
|
| Below you will find the "before" and "after" events for the application
| which may be used to do any work before or after a request into your
| application. Here you may also register your custom route filters.
|
*/

App::before(function($request)
{
    //
});


App::after(function($request, $response)
{
    //
});

/*
|--------------------------------------------------------------------------
| Authentication Filters
|--------------------------------------------------------------------------
|
| The following filters are used to verify that the user of the current
| session is logged into this application. The "basic" filter easily
| integrates HTTP Basic authentication for quick, simple checking.
|
*/

Route::filter('auth', function()
{
    if (Auth::guest()) return Redirect::to('/');
});


Route::filter('auth.basic', function()
{
    return Auth::basic();
});

/*
|--------------------------------------------------------------------------
| Guest Filter
|--------------------------------------------------------------------------
|
| The "guest" filter is the counterpart of the authentication filters as
| it simply checks that the current user is not logged in. A redirect
| response will be issued if they are, which you may freely change.
|
*/

Route::filter('guest', function()
{
    if (Auth::check()) return Redirect::route('home');
});

/*
|--------------------------------------------------------------------------
| CSRF Protection Filter
|--------------------------------------------------------------------------
|
| The CSRF filter is responsible for protecting your application against
| cross-site request forgery attacks. If this special token in a user
| session does not match the one given in this request, we'll bail.
|
*/

Route::filter('csrf', function()
{
    if (Session::token() != Input::get('_token'))
    {
        throw new Illuminate\Session\TokenMismatchException;
    }
});

/*
|--------------------------------------------------------------------------
| Composing View Filters
|--------------------------------------------------------------------------
|
| @todo: description here
|
*/
View::composer('layouts.base', function($view)
{
    $menus = array(
        'Dashboard' => array(
            'icon' => 'icon-dashboard',
            'url' => '#',
            'items' => array(
                'Analytic' => array('url' => '#'),
                'Control Panel' => array('url' => '#'),
                'Notification' => array('url' => '#')
            )
        ),
        'Basic CRUD' => array(
            'icon' => 'icon-edit',
            'url' => '#',
            'items' => array(
                'Form' => array('url' => 'demo/form'),
                'Table' => array('url' => 'demo/table'),
                'Detail' => array('url' => 'demo/detail')
            )
        ),
        'Element' => array(
            'icon' => 'icon-briefcase',
            'url' => '#',
            'items' => array(
                'Button' => array('url' => 'demo/button'),
                'Box' => array('url' => 'demo/panel'),
                'UI Control' => array('url' => 'demo/element')
            )
        ),
        'Element' => array(
            'icon' => 'icon-sitemap',
            'url' => '#',
            'items' => array(
                'Parent 1' => array(
                    'url' => '#',
                    'items' => array(
                        'Child 1.1' => array(
                            'url' => '#',
                            'items' => array(
                                'Grant Child 1.1.1' => array('url' => '#'),
                                'Grant Child 1.1.2' => array('url' => '#'),
                                'Grant Child 1.1.3' => array('url' => '#'),
                            )
                        ),
                        'Child 1.2' => array(
                            'url' => '#',
                            'items' => array(
                                'Grant Child 1.2.1' => array('url' => '#'),
                                'Grant Child 1.2.2' => array('url' => '#'),
                            )
                        )
                    )
                ),
            )
        ),
    );

    $view->with('menus', $menus);
});