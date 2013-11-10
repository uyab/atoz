@extends('layouts.backend')

@section('style-head')
    {{HTML::style('assets/plugins/bootstrap.datepicker/css/datepicker.css')}}
@stop

@section('content')
    <div class="page box">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="page-title">Dashboard</h2>
                </div>
                <div class="col-md-6">
                    <form action="" class="form form-inline box pull-right" role="form">
                        <div class="form-group">
                            <input type="text" class="form-control input-date">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control input-date">
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div id="chart" style="height:200px;"></div>
            </div>
            <div class="pad-wide"></div>
            <div class="row">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">General Summary</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="box-media brand-2">
                                    <div class="chart" id="chart1" style="height:40px"></div>
                                    <div class="icon-check"></div>
                                    <div class="info">
                                        <h3 class="title">98</h3>
                                        <small>Completed Ticket</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="box-media brand-2">
                                    <div class="chart" id="chart2" style="height:40px"></div>
                                    <div class="icon-bug"></div>
                                    <div class="info">
                                        <h3 class="title">7</h3>
                                        <small>New Bug</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="box-media brand-2">
                                    <div class="chart" id="chart3" style="height:40px"></div>
                                    <h3 class="title">17</h3>
                                    <small>Contributors</small>
                                    <div class="icon-group"></div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="box-media brand-2">
                                    <div class="chart" id="chart4" style="height:40px"></div>
                                    <h3 class="title">7:45</h3>
                                    <small>Average Time</small>
                                    <div class="icon-time"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pad-wide"></div>
            <div class="row">
                <div class="col-md-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title pull-left">Latest Issues</h3>
                            <div class="panel-action pull-right">
                                <div class="btn-group" data-toggle="buttons">
                                    <label class="btn active">
                                        <input type="radio" name="options"> All
                                    </label>
                                    <label class="btn">
                                        <input type="radio" name="options"> New
                                    </label>
                                    <label class="btn">
                                        <input type="radio" name="options"> Closed
                                    </label>
                                </div>
                            </div>
                        </div>
                        @include('elements.table.ticket')
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Top Contributor</h3>
                        </div>
                        @include('elements.table.contributor')
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('script-end')
    @parent

    {{HTML::script('assets/plugins/bootstrap.datepicker/js/bootstrap-datepicker.js')}}
    {{HTML::script('assets/plugins/jquery.flot/jquery.flot.js')}}
    {{HTML::script('assets/plugins/jquery.flot/curvedLines.js')}}

    <script type="text/javascript">
        $(function () {

            var options = {
                series: {
                    curvedLines: {
                        active: true
                    }
                },
                axis: { min:1, max: 31},
                yaxis: { min:0, max: 10000},
                xaxis: {tickLength: 0},
                colors: ['#2C3E50'],
                grid: {show: true, borderWidth:0}
            };

            var data = generateRandomData(1, 10000, 31);
            $.plot($("#chart"), [{data: data, lines: { show: true, lineWidth: 2, fill:true}, points:{show:false}, curvedLines: {apply:true}}], options);

            options.colors = ['#2980B9'];
            options.grid.show = false;
            $.plot($("#chart1"), [{data: data, bars: { show: true, lineWidth: 0, fill:true, barWidth:.9}, curvedLines: {apply:false}}], options);
            $.plot($("#chart2"), [{data: data, bars: { show: true, lineWidth: 0, fill:true, barWidth:.9}, curvedLines: {apply:false}}], options);
            $.plot($("#chart3"), [{data: data, bars: { show: true, lineWidth: 0, fill:true, barWidth:.9}, curvedLines: {apply:false}}], options);
            $.plot($("#chart4"), [{data: data, bars: { show: true, lineWidth: 0, fill:true, barWidth:.9}, curvedLines: {apply:false}}], options);
    });
    </script>
@stop
