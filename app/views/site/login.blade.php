@extends($extend)

@section('content')
    <div class="page-login">
        <div class="container">
            <div class="logo">
                <img src="{{asset('assets/img/sample/logo-app.jpg')}}" alt="">
            </div>
            <h1 class="ac">Atoz: Laravel Application Template</h1>
            <div class="pad-wide"></div>
            <div class="row">
                <div class="col-md-4 col-md-offset-4">

                    {{ Form::open([
                        "url"           => "login",
                        "method"        => "post",
                        "autocomplete"  => "off",
                        "role"          => "form",
                        "class"         => "form",

                    ]) }}

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Hi, Lara Bro</h3>
                            </div>
                            <div class="panel-body">

                                @if(Session::has('flash_error'))
                                    <div class="alert alert-danger alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        {{ Session::get('flash_error') }}
                                    </div>
                                @endif
                                @if(Session::has('flash_notice'))
                                    <div class="alert alert-success alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        {{ Session::get('flash_notice') }}
                                    </div>
                                @endif

                                    <div class="form-group">
                                        {{ Form::text(
                                            "username",
                                            Input::old("username"),
                                            [
                                                "placeholder" => "Username",
                                                "class" => "form-control"
                                            ])
                                        }}
                                    </div>

                                    <div class="form-group">
                                        {{ Form::password(
                                            "password",
                                            [
                                                "placeholder" => "Password",
                                                "class" => "form-control"
                                            ])
                                        }}
                                    </div>

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> Remember Me
                                        </label>
                                    </div>
                            </div>
                            <div class="panel-footer">
                                {{ Form::submit("Login", ["class" => 'btn btn-primary']) }}
                                <a href="#" class="btn btn-link">Forgot Password</a>
                            </div>
                        </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
@stop
