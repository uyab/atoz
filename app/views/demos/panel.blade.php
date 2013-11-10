@extends('layouts.backend')

@section('content')
<div class="box">
    <div class="container">

        <div class="row">
            <div class="col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Default Panel (Boxed)</h3>
                    </div>
                    <div class="panel-body">
                        Curabitur blandit tempus porttitor. Aenean lacinia bibendum nulla sed consectetur. Nulla vitae elit libero, a pharetra augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.
                    </div>
                </div>

                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Naked Panel</h3>
                    </div>
                    <div class="panel-body">
                        Curabitur blandit tempus porttitor. Aenean lacinia bibendum nulla sed consectetur. Nulla vitae elit libero, a pharetra augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.
                    </div>
                </div>

                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Information</h3>
                    </div>
                    <div class="panel-body">
                        Curabitur blandit tempus porttitor. Aenean lacinia bibendum nulla sed consectetur. Nulla vitae elit libero, a pharetra augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.
                    </div>
                </div>

                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">Success</h3>
                    </div>
                    <div class="panel-body">
                        Curabitur blandit tempus porttitor. Aenean lacinia bibendum nulla sed consectetur. Nulla vitae elit libero, a pharetra augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.
                    </div>
                </div>

                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <h3 class="panel-title">Warning</h3>
                    </div>
                    <div class="panel-body">
                        Curabitur blandit tempus porttitor. Aenean lacinia bibendum nulla sed consectetur. Nulla vitae elit libero, a pharetra augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.
                    </div>
                </div>

                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h3 class="panel-title">Danger</h3>
                    </div>
                    <div class="panel-body">
                        Curabitur blandit tempus porttitor. Aenean lacinia bibendum nulla sed consectetur. Nulla vitae elit libero, a pharetra augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.
                    </div>
                </div>

            </div>
            <div class="col-sm-6">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title pull-left">Panel with various toolbar</h3>
                        <div class="panel-action pull-right">
                            <div class="btn-group">
                                <a href="dashboard.html#layouts" class="btn"><i class="icon icon-reply"></i></a>
                                <a href="dashboard.html#layouts" class="btn dropdown-toggle last" data-toggle="dropdown"><i class="icon icon-gear"></i> <b class="caret"></b></a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="layouts/blank-page.html" target=&quot;_blank&quot;>Action 1</a></li>
                                    <li><a href="layouts/blank-page.html" target=&quot;_blank&quot;>Action 2</a></li>
                                    <li class="divider"></li>
                                    <li><a href="layouts/blank-page.html" target=&quot;_blank&quot;>Blank Page</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel-toolbar">
                        <div class="btn-group">
                            <button class="btn"><i class="icon-envelope"></i> Compose</button>
                            <button class="btn"><i class="icon-reply"></i> Reply</button>
                            <button class="btn"><i class="icon-forward"></i> Forward</button>
                        </div>
                    </div>
                    <div class="panel-body">
                        Cras justo odio, dapibus ac facilisis in, egestas eget quam. Aenean lacinia bibendum nulla sed consectetur. Curabitur blandit tempus porttitor. Vestibulum id ligula porta felis euismod semper. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna.
                    </div>
                    <div class="panel-toolbar bottom">
                        <div class="btn-group">
                            <button class="btn"><i class="icon-envelope"></i> Compose</button>
                            <button class="btn"><i class="icon-reply"></i> Reply</button>
                            <button class="btn"><i class="icon-forward"></i> Forward</button>
                        </div>
                    </div>

                </div>


                <div class="panel panel-default">
                    <div class="panel-heading panel-tab">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#tab1">Panel with tab</a></li>
                            <li class=""><a data-toggle="tab" href="#tab2">Tab2</a></li>
                            <li class=""><a data-toggle="tab" href="#tab3">Tab3</a></li>
                        </ul>
                    </div>
                    <div class="panel-body">
                        <div class="tab-content">
                            <div id="tab1" class="tab-pane active">
                              <p>Content 1</p>
                            </div>
                            <div id="tab2" class="tab-pane">
                              <p>Content 2</p>
                            </div>
                            <div id="tab3" class="tab-pane">
                              <p>Content 3</p>
                          </div>
                        </div>
                    </div>
                </div>

                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                    Collapsible Group Item #1
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>

                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                    Collapsible Group Item #1
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                    Collapsible Group Item #1
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pad"></div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Scrolling Panel</h3>
                    </div>
                    <div class="panel-body" style="height:200px" id="panelScroll">
                        <div class="shadow shadow-top"></div>
                        <h4>This is very loooong content.....</h4>
                        Curabitur blandit tempus porttitor. Aenean lacinia bibendum nulla sed consectetur. Nulla vitae elit libero, a pharetra augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.
                        Curabitur blandit tempus porttitor. Aenean lacinia bibendum nulla sed consectetur. Nulla vitae elit libero, a pharetra augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.
                        Curabitur blandit tempus porttitor. Aenean lacinia bibendum nulla sed consectetur. Nulla vitae elit libero, a pharetra augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.
                        Curabitur blandit tempus porttitor. Aenean lacinia bibendum nulla sed consectetur. Nulla vitae elit libero, a pharetra augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.
                        Curabitur blandit tempus porttitor. Aenean lacinia bibendum nulla sed consectetur. Nulla vitae elit libero, a pharetra augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.
                        Curabitur blandit tempus porttitor. Aenean lacinia bibendum nulla sed consectetur. Nulla vitae elit libero, a pharetra augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.
                        Curabitur blandit tempus porttitor. Aenean lacinia bibendum nulla sed consectetur. Nulla vitae elit libero, a pharetra augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.
                        Curabitur blandit tempus porttitor. Aenean lacinia bibendum nulla sed consectetur. Nulla vitae elit libero, a pharetra augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.
                        Curabitur blandit tempus porttitor. Aenean lacinia bibendum nulla sed consectetur. Nulla vitae elit libero, a pharetra augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.
                        Curabitur blandit tempus porttitor. Aenean lacinia bibendum nulla sed consectetur. Nulla vitae elit libero, a pharetra augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.
                        Curabitur blandit tempus porttitor. Aenean lacinia bibendum nulla sed consectetur. Nulla vitae elit libero, a pharetra augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.
                        Curabitur blandit tempus porttitor. Aenean lacinia bibendum nulla sed consectetur. Nulla vitae elit libero, a pharetra augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.
                        <div class="shadow shadow-bottom"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('script-end')
    @parent
    <script type="text/javascript">
    $(function(){
        $('#panelScroll').slimscroll();
    });
    </script>

@stop