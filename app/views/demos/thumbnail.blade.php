@extends('layouts.backend')

@section('style-head')
    @parent
    <style>
        .thumbnail{
            margin-bottom: 20px;
            text-align: center;
        }
    </style>

@stop
@section('content')
    <div class="page box">
        <div class="container">
            <div class="row">
                @for ($i = 0; $i < 4; $i++)
                    <div class="col-sm-6 col-md-3">
                        <a href="#" class="thumbnail">
                            <img class="img-responsive img-circle" src="data:image/png;base64,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" />
                        </a>
                    </div>
                @endfor
            </div>
            <div class="row">
                @for ($i = 0; $i < 4; $i++)
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <img class="img-responsive img-circle" src="data:image/png;base64,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" />
                            <div class="caption">
                                <h3>Thumbnail label</h3>
                                <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Donec id elit non mi porta gravida at eget metus.</p>
                                <p><a href="#" class="btn btn-primary">Button</a></p>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
@stop