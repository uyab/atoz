<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<title>App Title</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		<link rel="shortcut icon" href="/assets/img/favicon.ico"/>
		<link rel="icon" type="image/gif" href="/assets/img/favicon.gif">

		<!-- <link href="{{asset('assets/css/twitter-bootstrap/bootstrap.css')}}" rel="stylesheet"> -->
		<link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">
		<link href="{{asset('assets/css/atoz.css')}}" rel="stylesheet">

		<!-- <link href="{{asset('assets/css/social-jquery-ui-1.10.0.custom.css')}}" rel="stylesheet"> -->
		<!-- <link href="{{asset('assets/css/social.css')}}" rel="stylesheet"> -->
		<!-- <link href="{{asset('assets/css/social.plugins.css')}}" rel="stylesheet"> -->
		<link href="{{asset('assets/css/font-awesome.css')}}" rel="stylesheet">
		<!-- <link href="{{asset('assets/css/social-coloredicons-buttons.css')}}" rel="stylesheet"> -->
		<!--[if lt IE 9]>
		<link rel="stylesheet" type="text/css" href="{{asset('assets/css/social-jquery.ui.1.10.0.ie.css')}}"/>
		<![endif]-->


		<!-- <link href="{{asset('assets/css/demo.css')}}" rel="stylesheet"> -->
		<!-- <link href="{{asset('assets/plugins/jquery.uipro/style.css')}}" rel="stylesheet"> -->
		<!-- <link href="{{asset('assets/plugins/jquery.simplecolorpicker/jquery.simplecolorpicker.css')}}" rel="stylesheet"> -->
		<!-- <link href="{{asset('assets/css/themes/social.theme-blue.css')}}" rel="stylesheet" id="theme"> -->
		<!-- <link href="{{asset('assets/css/twitter-bootstrap/bootstrap-responsive.css')}}" rel="stylesheet"> -->
		<!-- <link href="{{asset('assets/plugins/jquery.jqvmap/jqvmap.css')}}" rel="stylesheet"> -->

		<!--[if lt IE 9]>
		    <script src="/assets/plugins/html5shiv.js"></script>
	    <![endif]-->
	</head>
	<body id="empty">
		<div class="wraper">

			<div id="main">
		 		<div id="content">@yield('content')</div>
			</div>

		</div>


<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery.ui/jquery-ui-1.10.1.custom.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery.ui.touch-punch/jquery.ui.touch-punch.js')}}"></script>

<script src="{{asset('assets/plugins/jquery.flot/jquery.flot.js')}}"></script>

<!-- <script src="{{asset('assets/plugins/twitter-bootstrap/bootstrap.js')}}"></script> -->
<script src="{{asset('assets/plugins/bootstrap-3.0.0/bootstrap.js')}}"></script>

<script src="{{asset('assets/plugins/jquery.slimscroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery.cookie/jquery.cookie.js')}}"></script>
<!-- <script src="/assets/plugins/jquery.simplecolorpicker/jquery.simplecolorpicker.js"></script> -->
<script src="{{asset('assets/plugins/jquery.uipro/uipro.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery.ui.chatbox/jquery.ui.chatbox.js')}}"></script>
<script src="{{asset('assets/plugins/jquery.livefilter/jquery.liveFilter.js')}}"></script>
<script src="{{asset('assets/js/chatboxManager.js')}}"></script>
<script src="{{asset('assets/js/extents.js')}}"></script>
<script src="{{asset('assets/js/app.js')}}"></script>
<!-- <script src="{{asset('assets/js/demo-settings.js')}}"></script> -->
<script src="{{asset('assets/js/sidebar.js')}}"></script>
<script>
      /*<![CDATA[*/
      $(function() {
        App.init();
        // DemoSettings.init({
        //   urlThemes: '/templates/social//assets/css/themes/social.theme-'
        // });
        // SideBar.init({
        //   shortenOnClickOutside: false
        // });
      });
      /*]]>*/
    </script>


<!-- <script src="/assets/plugins/jquery.fullcalendar/fullcalendar.min.js"></script>
<script src="/assets/plugins/jquery.jqvmap/jquery.vmap.min.js"></script>
<script src="/assets/plugins/jquery.jqvmap/maps/jquery.vmap.world.js"></script>
<script src="/assets/plugins/jquery.jqvmap/data/jquery.vmap.sampledata.js"></script>
<script src="/assets/plugins/jquery.flot/jquery.flot.js"></script>
<script src="/assets/plugins/jquery.flot/jquery.flot.resize.js"></script>
<script src="/assets/plugins/jquery.flot/jquery.flot.selection.js"></script>
<script src="/assets/plugins/jquery.sparkline/jquery.sparkline.min.js"></script>
<script src="/assets/plugins/jquery.justgage/raphael.2.1.0.min.js"></script>
<script src="/assets/plugins/jquery.justgage/justgage.1.0.1.min.js"></script>
<script src="/assets/plugins/jquery.gritter/jquery.gritter.min.js"></script>
<script src="/assets/plugins/bootstrap.daterangepicker/moment.js"></script>
<script src="/assets/plugins/bootstrap.daterangepicker/daterangepicker.js"></script>
<script src="/assets/plugins/jquery.pulsate/jquery.pulsate.min.js"></script> -->
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="/assets/plugins/jquery.flot/excanvas.min.js"></script><![endif]-->
<!-- <script src="/assets/js/dashboard.js"></script> -->
</body>
</html>