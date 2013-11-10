@extends('layouts.front')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">

                {{ Form::open([
                    "route"         => "postPasswordReminder",
                    "method"        => "post",
                    // "autocomplete"  => "off",
                    "role"          => "form",
                    "class"         => "form",

                ]) }}

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Forgot Password</h3>
                        </div>
                        <div class="panel-body">

                            @if($errors->first('email'))
                                <div class="alert alert-danger alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    {{ $errors->first('email') }}
                                </div>
                            @endif

                            <div class="form-group">
                                <div class="help-block">Relax, it happens.</div>
                                {{ Form::text(
                                    "email",
                                    Input::old("email"),
                                    [
                                        "placeholder" => "Email",
                                        "class" => "form-control"
                                    ])
                                }}
                            </div>
                        </div>
                        <div class="panel-footer">
                            {{ Form::submit("Reset My Password", ["class" => 'btn btn-primary']) }}
                            <a href="{{route('login')}}" class="btn btn-link">Cancel</a>
                        </div>
                    </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
@stop