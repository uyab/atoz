@extends('layouts.backend')

@section('style-head')
    @parent
    <link href="{{asset('assets/plugins/datatables/media/DT_bootstrap.css')}}" rel="stylesheet">
@stop

@section('script-end')
    @parent
    <script type="text/javascript" src="{{asset('assets/plugins/datatables/media/js/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript">
        $(function(){
            $('table.datatable').dataTable({
                "sDom":"<'row'<'col col-lg-6'l><'col col-lg-6'f>r>t<'row'<'col col-lg-6'i><'col col-lg-6'p>>",
                "sPaginationType":"full_numbers",
            })
        });
    </script>

@stop

@section('content')

    <div class="box">
    	<div class="container">
    		<div class="row">
    			<h3 class="page-title">
    			Open Table
    			</h3>
    		</div>

    		<div class="row">
                @include('elements.table.responsive')
    		</div>
    	</div>

        <div class="container">
            <div class="row">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title pull-left">
                                Boxed Table
                            </h3>
                            <div class="pull-right panel-action">
                                <div class="btn-group">
                                    <a href="" class="btn btn-info"><i class="icon icon-edit"></i></a>
                                    <a href="" class="btn btn-primary"><i class="icon icon-file"></i></a>
                                    <a href="" class="btn btn-warning"><i class="icon icon-facebook"></i></a>
                                    <a href="" class="btn btn-success"><i class="icon icon-twitter"></i></a>
                                    <a href="" class="btn btn-danger"><i class="icon icon-plus"></i></a>

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

                        <div class="panel-body">
                            @include('elements.table.responsive')
                        </div>
                    </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Datatable</h3>
                    </div>
                    @include('elements.table.datatable')

                </div>

            </div>
        </div>
    </div>

@stop