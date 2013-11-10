@extends('layouts.backend')

@section('content')

<div class="page box">
    <div class="container">
        <h3>Default Summary</h3>
        <div class="row">
            <div class="col-md-3">
                <div class="box-media brand-1">
                    <div class="icon-check"></div>
                    <div class="info">
                        <h3 class="title">98</h3>
                        <small>Completed Ticket</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box-media brand-2">
                    <div class="icon-bug"></div>
                    <div class="info">
                        <h3 class="title">7</h3>
                        <small>New Bug</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box-media brand-3">
                    <h3 class="title">17</h3>
                    <small>Contributors</small>
                    <div class="icon-group"></div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box-media brand-4">
                    <h3 class="title">7:45</h3>
                    <small>Average Time</small>
                    <div class="icon-time"></div>
                </div>
            </div>
        </div>

        <h3>Inverse</h3>
        <div class="row">
            <div class="col-md-3">
                <div class="box-media brand-1 brand-inverse">
                    <h3 class="title">98</h3>
                    <small>Completed Ticket</small>
                    <div class="icon-check"></div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box-media brand-2 brand-inverse">
                    <h3 class="title">7</h3>
                    <small>New Bug</small>
                    <div class="icon-bug"></div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box-media brand-3 brand-inverse">
                    <h3 class="title">17</h3>
                    <small>Contributors</small>
                    <div class="icon-group"></div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box-media brand-4 brand-inverse">
                    <h3 class="title">7:45</h3>
                    <small>Average Time</small>
                    <div class="icon-time"></div>
                </div>
            </div>
        </div>

        <h3>Align Right</h3>
        <div class="row">
            <div class="col-md-3">
                <div class="box-media brand-1 align-right">
                    <div class="info">
                        <h3 class="title">98</h3>
                        <small>Completed Ticket</small>
                    </div>
                    <div class="icon-check"></div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box-media brand-2 align-right">
                    <div class="info">
                        <h3 class="title">7</h3>
                        <small>New Bug</small>
                    </div>
                    <div class="icon-bug"></div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box-media brand-3 align-right">
                    <div class="info">
                        <h3 class="title">17</h3>
                        <small>Contributors</small>
                    </div>
                    <div class="icon-group"></div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box-media brand-4 align-right">
                    <div class="info">
                        <h3 class="title">7:45</h3>
                        <small>Average Time</small>
                    </div>
                    <div class="icon-time"></div>
                </div>
            </div>
        </div>

        <h3>Align Center</h3>
        <div class="row">
            <div class="col-md-3">
                <div class="box-media brand-1 align-center">
                    <div class="icon-check"></div>
                    <div class="info">
                        <h3 class="title">98</h3>
                        <small>Completed Ticket</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box-media brand-2 align-center">
                    <div class="icon-bug"></div>
                    <div class="info">
                        <h3 class="title">7</h3>
                        <small>New Bug</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box-media brand-3 align-center">
                    <div class="icon-group"></div>
                    <div class="info">
                        <h3 class="title">17</h3>
                        <small>Contributors</small>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box-media brand-4 align-center">
                    <div class="icon-time"></div>
                    <div class="info">
                        <h3 class="title">7:45</h3>
                        <small>Average Time</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop