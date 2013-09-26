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
                    <form role="form"  class="form">

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Hi, Bro</h3>
                        </div>
                        <div class="panel-body">

                            <div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <strong>Ooops!</strong> Login failed.
                            </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Username">
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Remember Me
                                    </label>
                                </div>
                        </div>
                        <div class="panel-footer">
                            <input type="submit" class="btn btn-primary" value="Login">
                            <a href="#" class="btn btn-link">Forgot Password</a>
                        </div>
                    </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@stop
