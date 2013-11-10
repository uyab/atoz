<aside class="sidebar">
    <div class="sidebar-content">
        <div class="scrollable">
            <div href="#" class="navigation-sidebar">
                <a data-container="body" data-placement="right" data-original-title=""
                    data-sidebar-full="Click To Minimize"
                    data-sidebar-mini="Click To Auto Hide"
                    data-sidebar-auto="Click To Permanently Expand"
                >
                    <i class="switch-sidebar-icon icon-none"></i>
                </a>
            </div>

            <div class="search-sidebar hide">
                <i class="icon-search icon-2"></i>
                <form class="search-sidebar-form">
                <input type="text" class="search-query input-block-level" placeholder="Search">
                </form>
            </div>

            <section class="menu">
                <div class="accordion" id="accordion2">

                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse-dashboard">
                                <i class="icon-dashboard icon-2"></i>
                                <span>Dashboard </span><span class="arrow"></span>
                            </a>
                        </div>
                        <ul id="collapse-dashboard" class="accordion-body nav nav-list collapse sub-menu">
                            <li><a href="{{url('demo/dashboard-git')}}"><i class="icon-circle-blank icon"></i> <span>Ticketing/Repository</span></a></li>
                            <li><a href="{{url('demo/dashboard-control-panel')}}"><i class="icon-circle-blank icon"></i> <span>Control Panel</span></a></li>
                            <li><a href="{{url('demo/dashboard-notification')}}"><i class="icon-circle-blank icon"></i> <span>Notification</span></a></li>
                        </ul>
                    </div>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" href="{{url('demo/color-scheme')}}">
                                <i class="icon-th icon-2"></i>
                                <span>Color Scheme </span></span>
                            </a>
                        </div>
                    </div>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse-element">
                                <i class="icon-briefcase icon-2"></i>
                                <span>Element </span><span class="arrow"></span>
                            </a>
                        </div>
                        <ul id="collapse-element" class="accordion-body nav nav-list collapse sub-menu">
                            <li><a class="tt" data-toggle="tooltip" data-original-title="test" href="{{url('demo/button')}}"><i class="icon-circle-blank icon"></i> <span>Button</span></a></li>
                            <li><a href="{{url('demo/panel')}}"><i class="icon-circle-blank icon"></i> <span>Box</span></a></li>
                            <li><a href="{{url('demo/modal')}}"><i class="icon-circle-blank icon"></i> <span>Modal Box</span></a></li>
                            <li><a href="{{url('demo/notification')}}"><i class="icon-bell icon"></i> <span>Notification</span></a></li>
                            <li><a href="{{url('demo/statistic')}}"><i class="icon-bar-chart icon"></i> <span>Statistical Info</span></a></li>
                        </ul>
                    </div>

                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse-crud">
                                <i class="icon-edit icon-2"></i>
                                <span>Basic CRUD </span><span class="arrow"></span>
                            </a>
                        </div>
                        <ul id="collapse-crud" class="accordion-body nav nav-list collapse sub-menu">
                            <li><a href="{{url('demo/form')}}"><i class="icon-list-alt icon"></i> <span>Form</span></a></li>
                            <li><a href="{{url('demo/table')}}"><i class="icon-table icon"></i> <span>Table</span></a></li>
                            <li><a href="{{url('demo/detail')}}"><i class="icon-file-text-alt icon"></i> <span>Detail</span></a></li>
                            <li><a href="{{url('demo/thumbnail')}}"><i class="icon-picture icon"></i> <span>Thumbnail</span></a></li>
                        </ul>
                    </div>

                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse-sample-page">
                                <i class="icon-edit icon-2"></i>
                                <span>Sample Page </span><span class="arrow"></span>
                            </a>
                        </div>
                        <ul id="collapse-sample-page" class="accordion-body nav nav-list collapse sub-menu">
                            <li><a href="{{url('demo/crud')}}"><i class="icon-list-alt icon"></i> <span>Single Page Crud</span></a></li>
                            <li><a href="{{url('demo/inbox')}}"><i class="icon-envelope-alt icon"></i> <span>Inbox</span></a></li>
                            <li><a href="{{url('demo/comment')}}"><i class="icon-comments-alt icon"></i> <span>Comment Stream</span></a></li>
                        </ul>
                    </div>

                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse-multi-level">
                            <i class="icon-sitemap icon-2"></i>
                            <span>Sample Multi Level</span><span class="arrow"></span>
                            </a>
                        </div>
                        <ul id="collapse-multi-level" class="accordion-body nav nav-list collapse sub-menu">
                            <li>
                                <a href="#" data-toggle="sub-menu-collapse" data-target="#collapse-2-level">
                                    <i class="icon-circle-blank icon"></i>
                                    <span>4-Level</span>
                                    <span class="arrow"></span>
                                </a>
                            </li>
                            <ul id="collapse-2-level" class="nav nav-list collapse">
                                <li>
                                    <a href="#" data-toggle="sub-menu-collapse" data-target="#collapse-3-level">
                                    <i class="icon-circle-blank icon"></i>
                                    <span>Sub Element 1</span>
                                    <span class="arrow"></span>
                                    </a>
                                </li>
                                <ul id="collapse-3-level" class="nav nav-list collapse">
                                    <li class="active"><a href="#"><i class="icon-circle-blank icon"></i> <span>Element 1</span></a></li>
                                    <li><a href="#"><i class="icon-circle-blank icon"></i> <span>Element 2</span></a></li>
                                    <li><a href="{{url('demo/child')}}"><i class="icon-circle-blank icon"></i> <span>Element 3</span></a></li>
                                </ul>
                                <li><a href="#"><i class="icon-circle-blank icon"></i> <span>Sub Element 2</span></a></li>
                                <li><a href="#"><i class="icon-circle-blank icon"></i> <span>Sub Element 3</span></a></li>
                            </ul>
                        </ul>
                    </div>
                </div>
            </section>
        </div>

        <div class="chat-users hide" style="height:0">
            <div class="no-user">User not found</div>
            <ul class="user-list">
                <li>
                    <a data-firstname="Cesar" data-lastname="Mendoza" data-status="online" data-userid="1" href="#">
                        <i class="icon-user icon-2"></i>
                        <span>Cesar Mendoza</span>
                        <i class="icon-circle user-status online"></i>
                    </a>
                </li>
            </ul>

            <form class="user-filter">
                <div class="input-prepend open">
                    <div class="btn-group dropup">
                        <button class="btn dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-cog"></i>
                        </button>
                        <ul class="dropdown-menu pull-left">
                            <li><a href="#">Chat Sounds</a></li>
                            <li><a href="#">Advanced Settings...</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Turn Off Chat</a></li>
                        </ul>
                    </div>
                    <input type="text" class="input-filter" placeholder="Search user...">
                </div>
            </form>
        </div>
    </div>
</aside>