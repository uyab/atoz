<div class="box">
	<div class="container">
		<div class="row">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="icon-bar-chart"></i> Visits by location</h3>
				</div>
				<div class="panel-body">
					<div id="demo-plot" class="plot" style="height:200px"></div>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="{{asset('assets/plugins/jquery.flot/jquery.flot.js')}}"></script>

<script type="text/javascript">
$(function() {

	var data = [[0, 3], [4, 8], [8, 5], [9, 13]];

	$.plot("#demo-plot", [ data ]);

});
</script>