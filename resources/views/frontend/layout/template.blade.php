
<!DOCTYPE html>
<html>
	<head>
		@include('frontend.includes.header')
		@yield('page-title')
		@include('frontend.includes.css')
	</head>
	<body class="loading-overlay-showing" data-plugin-page-transition data-loading-overlay data-plugin-options="{'hideDelay': 500}">
		<div class="loading-overlay">
			<div class="bounce-loader">
				<div class="bounce1"></div>
				<div class="bounce2"></div>
			</div>
		</div>
		<div class="body">
			@include('frontend.includes.topbar')
			@yield('body-content')
			@include('frontend.includes.footer')
		</div>
		@include('frontend.includes.script')
	</body>
</html>
