<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Azzara Bootstrap 4 Admin Dashboard</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="{{asset('docs/img/icon.ico')}}" type="image/x-icon" />
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
	<!-- Fonts and icons -->
	<script src="{{asset('docs/js/plugin/webfont/webfont.min.js')}}"></script>
	<script>
		WebFont.load({
			google: {
				"families": ["Open+Sans:300,400,600,700"]
			},
			custom: {
				"families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"],
				urls: ["{{asset('docs/css/fonts.css')}}"]
			},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="{{asset('docs/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('docs/css/azzara.min.css')}}">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="{{asset('docs/css/demo.css')}}">
</head>

<body>
	<div id="app">
		<div class="wrapper">
		<app-layout>
   
   		<router-view></router-view>
 		</app-layout>
		
		</div>
	</div>
	
	<!--   Core JS Files   -->
	<script src="{{mix('js/app.js')}}"></script>

	

	<!-- jQuery UI -->
	<script src="{{asset('docs/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js')}}"></script>
	<script src="{{asset('docs/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js')}}"></script>

	<!-- jQuery Scrollbar -->
	<script src="{{asset('docs/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>

	<!-- Moment JS -->
	<script src="{{asset('docs/js/plugin/moment/moment.min.js')}}"></script>



	<!-- jQuery Sparkline -->
	<script src="{{asset('docs/js/plugin/jquery.sparkline/jquery.sparkline.min.js')}}"></script>

	



	

	<!-- Bootstrap Toggle -->
<script src="{{asset('docs/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js')}}"></script>
	
	<!-- jQuery Vector Maps -->
	<script src="{{asset('docs/js/plugin/jqvmap/jquery.vmap.min.js')}}"></script>
	<script src="{{asset('docs/js/plugin/jqvmap/maps/jquery.vmap.world.js')}}"></script>

	<!-- Google Maps Plugin -->
	<script src="{{asset('docs/js/plugin/gmaps/gmaps.js')}}"></script>

	

	<!-- Azzara JS -->
	<script src="{{asset('docs/js/ready.min.js')}}"></script>
	


	<!-- Azzara DEMO methods, don't include it in your project! -->
	<!--
<script src="{{asset('docs/js/setting-demo.js')}}"></script>
<script src="{{asset('docs/js/demo.js')}}"></script> -->
</body>

</html>