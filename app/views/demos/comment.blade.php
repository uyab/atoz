@extends('layouts.backend')

@section('content')

    <div class="page box">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
            <div class="panel panel-default mural">
                <div class="panel-heading">
                    <h3 class="panel-title">Mural</h3>
                </div>
                <form action="#" class="form form-mural" role="form">
                    <textarea class="form-control" rows="4"></textarea>
                    <div class="form-action">
                        <div class="btn-group">
                            <button class="btn" data-original-title="URL"><i class="icon-link"></i></button>
                            <button class="btn" data-original-title="Img"><i class="icon-picture"></i></button>
                            <button class="btn" data-original-title="List"><i class="icon-youtube-play"></i></button>
                        </div>
                        <div class="pull-right">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
                <div class="panel-body">
                    @for($i=0; $i<3;$i++)
                    <div class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object img-responsive" style="width:50px" src="data:image/png;base64,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">
                        </a>
                        <div class="media-body">
                            <h5 class="media-heading">
                                <span>Bayu Hendra Winata</span>
                                <div class="pull-right">
                                    <span class="date">3 days ago</span>
                                </div>
                            </h5>
                            <p>Cras mattis consectetur purus sit amet fermentum. Nulla vitae elit libero, a pharetra augue. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Vestibulum id ligula porta felis euismod semper. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                            <div class="media">
                                <a class="pull-left" href="#">
                                    <img class="media-object img-responsive" style="width:50px" src="data:image/png;base64,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">
                                </a>
                                <div class="media-body">
                                    <h5 class="media-heading">
                                        <span>Bayu Hendra Winata</span>
                                        <div class="pull-right">
                                            <span class="date">3 days ago</span>
                                        </div>
                                    </h5>
                                    <p>This is comment...</p>
                                </div>
                            </div>
                            <div class="media">
                                <a class="pull-left" href="#">
                                    <img class="media-object img-responsive" style="width:50px" src="data:image/png;base64,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">
                                </a>
                                <div class="media-body">
                                    <h5 class="media-heading">
                                        <span>Bayu Hendra Winata</span>
                                        <div class="pull-right">
                                            <span class="date">3 days ago</span>
                                        </div>
                                    </h5>
                                    <p>This is comment...</p>
                                </div>
                            </div>
                            <div class="media">
                                <form action="" role="form" class="form">
                                    <textarea name="" id="" cols="1" class="form-control" placeholder="Write a comment..."></textarea>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endfor
                    <div class="media">
                        <img class="img-responsive img-block" style="width:100%" src="data:image/png;base64,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">
                        <a class="pull-left" href="#">
                            <img class="media-object img-responsive" style="width:50px" src="data:image/png;base64,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">
                        </a>
                        <div class="media-body">
                            <h5 class="media-heading">
                                <span>Bayu Hendra Winata</span>
                                <div class="pull-right">
                                    <span class="date">3 days ago</span>
                                </div>
                            </h5>
                            <p>Cras mattis consectetur purus sit amet fermentum. Nulla vitae elit libero, a pharetra augue. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Vestibulum id ligula porta felis euismod semper. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                            <div class="media">
                                <form action="" role="form" class="form">
                                    <textarea name="" id="" cols="1" class="form-control" placeholder="Write a comment..."></textarea>
                                    <div class="form-action">
                                        <div class="btn-group ">
                                            <button class="btn btn-sm" data-original-title="URL"><i class="icon-link"></i></button>
                                            <button class="btn btn-sm" data-original-title="Img"><i class="icon-picture"></i></button>
                                            <button class="btn btn-sm" data-original-title="List"><i class="icon-youtube-play"></i></button>
                                        </div>
                                        <div class="pull-right">
                                            <button class="btn btn-primary btn-sm" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @for($i=0; $i<2;$i++)
                    <div class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object img-responsive" style="width:50px" src="data:image/png;base64,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">
                        </a>
                        <div class="media-body">
                            <h5 class="media-heading">
                                <span>Bayu Hendra Winata</span>
                                <div class="pull-right">
                                    <span class="date">3 days ago</span>
                                </div>
                            </h5>
                            <p>Cras mattis consectetur purus sit amet fermentum. Nulla vitae elit libero, a pharetra augue. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Vestibulum id ligula porta felis euismod semper. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                            <div class="media">
                                <form action="" role="form" class="form">
                                    <textarea name="" id="" cols="1" class="form-control" placeholder="Write a comment..."></textarea>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endfor
                </div>
            </div>

                </div>
                <div class="col-md-6"></div>
            </div>
        </div>
    </div>
@stop