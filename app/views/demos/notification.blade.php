@extends('layouts.backend')

@section('content')

<div class="page box">
    <div class="container">
        <div class="row">

            <button id="notifyDefault" class="btn btn-primary">Default Notification</button>
            <button id="notifySuccess" class="btn btn-success">Success Notification</button>
            <button id="notifyDanger" class="btn btn-danger">Danger Notification</button>
            <button id="notifySticky" class="btn btn-inverse">Sticky Notification</button>

        </div>
    </div>
</div>
@stop

@section('script-end')
    @parent
    <script type="text/javascript">
        $(function(){
            $('#notifyDefault').on('click', function(){
                $.ambiance({
                    message: "Default notification.",
                    title: false,
                });
            });
            $('#notifySuccess').on('click', function(){
                $.ambiance({
                    message: "Success notification.",
                    title: false,
                    type: 'success'
                });
            });
            $('#notifyDanger').on('click', function(){
                $.ambiance({
                    message: "Danger notification.",
                    title: false,
                    type: 'error'
                });
            });
            $('#notifySticky').on('click', function(){
                $.ambiance({
                    message: "You need to close this manually.",
                    title: false,
                    timeout: 0
                });
            });
        });
    </script>
@stop