                {{ Form::open([
                    "route"         => "register",
                    "method"        => "post",
                    // "autocomplete"  => "off",
                    "role"          => "form",
                    "class"         => "form",

                ]) }}
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Or create new account</h3>
                        </div>
                        <div class="panel-body">

                            @if(Session::has('register_error'))
                                <div class="alert alert-danger alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    {{ Session::get('register_error') }}
                                </div>
                            @endif

                            <div class="form-group">
                                <span class="err"> {{$errors->first('username')}} </span>
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
                                {{ Form::password(
                                    "password",
                                    [
                                        "placeholder" => "Password",
                                        "class" => "form-control"
                                    ])
                                }}
                            </div>

                            <div class="form-group">
                                <span class="err"> {{$errors->first('password_confirmation')}} </span>
                                {{ Form::password(
                                    "password_confirmation",
                                    [
                                        "placeholder" => "Password confirmation",
                                        "class" => "form-control"
                                    ])
                                }}
                            </div>

                        </div>
                        <div class="panel-footer">
                            {{ Form::submit("Create My Account", ["class" => 'btn btn-primary']) }}
                        </div>
                    </div>
                {{ Form::close() }}