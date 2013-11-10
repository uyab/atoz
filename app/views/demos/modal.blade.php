@extends('layouts.backend')

@section('content')

<div class="page box">
    <div class="container">
        <div class="row">
            <a data-toggle="modal" href="#myModal" class="btn btn-primary btn-lg">Launch Default Modal</a>
            <a data-toggle="modal" href="#topModal" class="btn btn-primary btn-lg">Launch Top Modal</a>
            <a data-toggle="modal" href="#panoramicModal" class="btn btn-primary btn-lg">Launch Panoramic Modal</a>
            <a data-toggle="modal" href="#fullModal" class="btn btn-primary btn-lg">Launch Full Screen Modal</a>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      <h4 class="modal-title">Modal title</h4>
    </div>
    <div class="modal-body">
      ...
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      <button type="button" class="btn btn-primary">Save changes</button>
    </div>
  </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<aside id="topModal" class="modal top fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="alert alert-info">
            <div class="modal-body">
                <p><h4>The new product cannot be saved due to an error. A log message has been emailed to you.</h4></p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary btn-large" data-dismiss="modal">Close</button>
            </div>

            </div>
        </div>
    </div>
</aside>

<aside id="panoramicModal" class="modal panoramic fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h3>Modal Heading</h3>
            </div>

            <div class="modal-body">
                <p><h4>The new product cannot be saved due to an error. A log message has been emailed to you.</h4></p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary btn-large" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</aside>

<aside id="fullModal" class="modal full fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h3>Session Timeout :(</h3>
            </div>

            <div class="modal-body">
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Nullam quis risus eget urna mollis ornare vel eu leo. Nulla vitae elit libero, a pharetra augue. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam porta sem malesuada magna mollis euismod. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary btn-large" data-dismiss="modal">Relogin</button>
            </div>
        </div>
    </div>
</aside>

@stop