@extends('layouts.front')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">

                {{ Form::open([
                    "url"           => URL::route("postPasswordReset"),
                    "method"        => "post",
                    // "autocomplete"  => "off",
                    "role"          => "form",
                    "class"         => "form",

                ]) }}

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Reset Password</h3>
                        </div>
                        <div class="panel-body">

                            {{ Form::hidden('token', $token) }}

                            <div class="form-group">
                                <span class="err"> {{$errors->first('email')}} </span>
                                {{ Form::text(
                                    "email",
                                    Input::old("email"),
                                    [
                                        "placeholder" => "Email",
                                        "class" => "form-control"
                                    ])
                                }}
                            </div>
                            <div class="form-group">
                                <span class="err"> {{$errors->first('password')}} </span>
                                {{ Form::text(
                                    "password",
                                    '',
                                    [
                                        "placeholder" => "New password",
                                        "class" => "form-control"
                                    ])
                                }}
                            </div>
                            <div class="form-group">
                                <span class="err"> {{$errors->first('password_confirmation')}} </span>
                                {{ Form::text(
                                    "password_confirmation",
                                    '',
                                    [
                                        "placeholder" => "Confirm new password",
                                        "class" => "form-control"
                                    ])
                                }}
                            </div>
                        </div>
                        <div class="panel-footer">
                            {{ Form::submit("Update My Password", ["class" => 'btn btn-primary']) }}
                            <a href="{{route('login')}}" class="btn btn-link">Cancel</a>
                        </div>
                    </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
@stop