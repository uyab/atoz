@extends('layouts.backend')

@section('content')
    <div class="box page page-cpanel">
        <div class="container">
        	<h3 class="page-subtitle">Personal</h3>
        	<div class="row">
    			@for ($i = 0; $i < 10; $i++)
    			    <div class="col-sm-2">
    					<button type="button" class="item btn btn-default btn-lg" style="width:100%">
    					  	<span class="glyphicon glyphicon-star"></span>
    					  	<p>Manage User</p>
    					</button>
    			    </div>
    			@endfor
        	</div>

        	<h3 class="page-subtitle">Document</h3>
        	<div class="row">
    			@for ($i = 0; $i < 4; $i++)
    			    <div class="col-sm-2">
    					<button type="button" class="item btn btn-default btn-lg" style="width:100%">
    					  	<span class="glyphicon glyphicon-star"></span>
    					  	<p>Manage User</p>
    					</button>
    			    </div>
    			@endfor
        	</div>
        </div>
    </div>
@stop