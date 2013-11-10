@extends('layouts.backend')

@section('content')
    <div class="box page page-inbox">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="mb clearfix">
                        <button class="btn btn-primary btn-block"><i class="icon-edit"></i> Compose</button>
                    </div>
                    <div class="list-group">
                        <a href="#" class="list-group-item active">
                            <span class="badge">14</span>
                            <i class="icon-inbox"></i>
                            Inbox
                        </a>
                        <a href="#" class="list-group-item"><i class="icon-star-empty"></i> Starred</a>
                        <a href="#" class="list-group-item"><i class="icon-envelope-alt"></i> Sent Mail</a>
                        <a href="#" class="list-group-item"><i class="icon-pencil"></i> Draft</a>
                        <a href="#" class="list-group-item"><i class="icon-trash"></i> Trash</a>
                        <a href="#" class="list-group-item"><i class="icon-user"></i> Contact</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb clearfix">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                    All <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Unread</a></li>
                                    <li><a href="#">Read</a></li>
                                    <li><a href="#">Unreplied</a></li>
                                    <li><a href="#">Replied</a></li>
                                </ul>
                            </div>
                        <div class="btn-group pull-right">
                            <button type="button" class="btn"><i class="icon icon-chevron-left"></i></button>
                            <button type="button" class="btn"><i class="icon icon-chevron-right"></i></button>
                        </div>
                    </div>
                    <div class="list-group">
                    @for($i=0;$i<8;$i++)
                      <a href="#" class="list-group-item">
                        <h5 class="list-group-item-heading">Naura Anandita</h5>
                        <p class="list-group-item-text">Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
                      </a>
                      @endfor
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title pull-left">
                                from Naura Amarasi <span class="meta">23 June (13 days ago)</span>
                            </h3>
                            <div class="pull-right panel-action">
                                <div class="btn-group">
                                    <a href="dashboard.html#layouts" class="btn dropdown-toggle last" data-toggle="dropdown"><b class="caret"></b></a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="#">Reply</a></li>
                                        <li><a href="#">Forward</a></li>
                                        <li><a href="#">Invite other contact</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Delete this message</a></li>
                                        <li><a href="#">Report as SPAM</a></li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
    <p>Mr. Soe</p> <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat. Vestibulum ullamcorper sodales nisi nec condimentum. Mauris convallis mauris at pellentesque volutpat. Phasellus at ultricies neque, quis malesuada augue. Donec eleifend condimentum nisl eu consectetur. Integer eleifend, nisl venenatis consequat iaculis, lectus arcu malesuada sem, dapibus porta quam lacus eu neque.</p> <blockquote> <em>Morbi nec nunc condimentum, egestas dui nec, fermentum diam. Vivamus vel tincidunt libero, vitae elementum ligula. Nunc placerat purus quam, ac adipiscing arcu rutrum eu. Vestibulum adipiscing ut augue ut auctor. Vestibulum nec lorem imperdiet nibh mollis gravida ut a justo.<br><br> Suspendisse arcu nulla, mollis sed eros id, pellentesque vulputate nulla. Nullam lectus dolor, pulvinar eu tristique nec, tempus ut ligula. Quisque pulvinar ut justo id dapibus. Duis convallis tellus faucibus nisl fermentum, nec semper massa adipiscing. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In vestibulum est vel elementum pellentesque.</em> </blockquote> <p>Duis non malesuada est, quis congue nibh. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p> <p>Best Regards<br>Mical</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@stop