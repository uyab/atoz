@extends('layouts.base')

@section('body')
    <body class="empty">
        <div class="wraper">

            <div id="main">
                <div id="content">
                    <div class="page-front">
                        <div class="logo">
                            <img src="{{asset('assets/img/sample/logo-app.jpg')}}" alt="">
                        </div>
                        <h1 class="ac">Atoz: Laravel Application Template</h1>
                        <div class="pad-wide"></div>
                        @yield('content')
                    </div>
                </div>
            </div>

        </div>
    </body>
@stop