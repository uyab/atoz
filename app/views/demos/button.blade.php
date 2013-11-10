@extends('layouts.backend')

@section('content')
    <div class="box">
        <div class="container">

            <div class="row">
                <div class="col-lg-7">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Various Button</h3>
                        </div>
                        <div class="panel-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th style="width: 200px;">Visual</th>
                                        <th>Class</th>
                                        <th>Used for</th>
                                    </tr>
                                </thead>
                                <tr>
                                    <td><button class="btn btn-primary">Primary</button></td>
                                    <td>.btn .btn-primary</td>
                                    <td>Save, Submit, Login, Update</td>
                                </tr>
                                <tr>
                                    <td><button class="btn btn-default">Default</button></td>
                                    <td>.btn .btn-default</td>
                                    <td>Cancel, Toolbar</td>
                                </tr>
                                <tr>
                                    <td><button class="btn btn-success">Success</button></td>
                                    <td>.btn .btn-success</td>
                                    <td>Approve, Ok, Confirm</td>
                                </tr>
                                <tr>
                                    <td><button class="btn btn-warning">Warning</button></td>
                                    <td>.btn .btn-warning</td>
                                    <td>Merge, Continue, Move To</td>
                                </tr>
                                <tr>
                                    <td><button class="btn btn-danger">Danger</button></td>
                                    <td>.btn .btn-danger</td>
                                    <td>Delete, Remove, Move to Trash, Refuse, Reject</td>
                                </tr>
                                <tr>
                                    <td><button class="btn btn-info">Info</button></td>
                                    <td>.btn .btn-info</td>
                                    <td>Detail Info, Show Popup</td>
                                </tr>
                                <tr>
                                    <td><button class="btn btn-inverse">Inverse</button></td>
                                    <td>.btn .btn-inverse</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td><button class="btn btn-link">Link Button</button></td>
                                    <td>.btn .btn-link</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td><button class="btn btn-primary btn-block">Full Width Button</button></td>
                                    <td>.btn .btn-primary .btn-block</td>
                                    <td>-</td>
                                </tr>
                            </table>
                        </div>
                    </div>

                </div>
                <div class="col-lg-5">

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Toggle Button</h3>
                        </div>
                        <div class="panel-body">
                            <h4>Checkbox Replacement</h4>
                            <div class="btn-group" data-toggle="buttons">
                                <label class="btn">
                                    <input type="checkbox"> Option 1
                                </label>
                                <label class="btn">
                                    <input type="checkbox"> Option 2
                                </label>
                            </div>
                            <h4>Radio Replacement</h4>
                            <div class="btn-group" data-toggle="buttons">
                                <label class="btn">
                                    <input type="radio" name="options"> Option 1
                                </label>
                                <label class="btn">
                                    <input type="radio" name="options"> Option 2
                                </label>
                            </div>
                        </div>
                    </div>


                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Dropdown Button</h3>
                        </div>
                        <div class="panel-body">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                    Dropdown Button <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </div>

                            <!-- Split button -->
                            <div class="btn-group">
                                <button type="button" class="btn btn-default">Split Button</button>
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Pagination</h3>
                        </div>
                        <div class="panel-body">
                            <ul class="pagination">
                                <li><a href="#">&laquo;</a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">&raquo;</a></li>
                            </ul>
                        </div>
                    </div>


                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Iconic Button</h3>
                        </div>
                        <div class="panel-body">

                            <h5>Default Monochrome Icon</h5>
                            <a href="buttons.html#" class="btn"><i class="icon-pencil"></i> <strong>Write</strong></a>
                            <a href="buttons.html#" class="btn"><i class="icon-edit"></i> <strong>Edit</strong></a>
                            <a href="buttons.html#" class="btn"><i class="icon-trash"></i> <strong>Delete</strong></a>
                            <a href="buttons.html#" class="btn"><i class="icon-align-justify"></i> <strong>List</strong></a>

                            <h5>Colored Icons</h5>
                            <a href="buttons.html#" class="btn"><i class="coloredicon pencil-add"></i> <strong>Write</strong></a>
                            <a href="buttons.html#" class="btn"><i class="coloredicon page-white-edit"></i> <strong>Edit</strong></a>
                            <a href="buttons.html#" class="btn"><i class="coloredicon delete"></i> <strong>Delete</strong></a>
                            <a href="buttons.html#" class="btn"><i class="coloredicon text-align-justify"></i> <strong>List</strong></a>

                            <h5>Light Toolbar</h5>
                            <div class="btn-group">
                                <button class="btn" data-original-title="Bold - Ctrl+B"><i class="icon-bold"></i></button>
                                <button class="btn" data-original-title="Italic - Ctrl+I"><i class="icon-italic"></i></button>
                                <button class="btn" data-original-title="List"><i class="icon-list"></i></button>
                                <button class="btn" data-original-title="Img"><i class="icon-picture"></i></button>
                                <button class="btn" data-original-title="URL"><i class="icon-arrow-right"></i></button>
                            </div>

                            <h5>Dark Toolbar</h5>
                            <div class="btn-group">
                                <a href="buttons.html#" class="btn btn-inverse"><i class="icon-white icon-fast-backward"></i></a>
                                <a href="buttons.html#" class="btn btn-inverse"><i class="icon-white icon-backward"></i></a>
                                <a href="buttons.html#" class="btn btn-inverse"><i class="icon-white icon-stop"></i></a>
                                <a href="buttons.html#" class="btn btn-inverse"><i class="icon-white icon-play"></i></a>
                                <a href="buttons.html#" class="btn btn-inverse"><i class="icon-white icon-pause"></i></a>
                                <a href="buttons.html#" class="btn btn-inverse"><i class="icon-white icon-forward"></i></a>
                                <a href="buttons.html#" class="btn btn-inverse"><i class="icon-white icon-fast-forward"></i></a>
                            </div>

                            <h5>Grouped Button</h5>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default"><i class="icon icon-envelope"></i> Compose</button>
                                <button type="button" class="btn btn-default"><i class="icon icon-archive"></i> Archive</button>
                                <button type="button" class="btn btn-default"><i class="icon icon-trash"></i> Delete</button>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@stop