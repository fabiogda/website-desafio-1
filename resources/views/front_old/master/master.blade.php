<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="freehtml5.co" />

	{{-- {!! $head ?? '' !!} --}}

	<link href="https://fonts.googleapis.com/css?family=Miriam+Libre:400,700" rel="stylesheet">
	
	<link rel="stylesheet" href="{{ url(mix('front/assets/css/vendor.css')) }}">
	<link rel="stylesheet" href="{{ url(mix('front/assets/css/style.css')) }}">
	<script src="{{ url(mix('front/assets/js/modernizr.js')) }}"></script>
	<!--[if lt IE 9]>
	<script src="{{ url(mix('front/assets/js/respond.js')) }}"></script>
	<![endif]-->

	</head>
	<body>

	<div class="fh5co-loader"></div>

	<div id="page">

        <!-- Header -->
        @include('front.includes.header')

        <!-- Content -->
        @yield('content')

        <!-- Footer -->
        @include('front.includes.footer')

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>

	<script src="{{ url(mix('front/assets/js/vendor.js')) }}"></script>
	<script src="{{ url(mix('front/assets/js/main.js')) }}"></script>

	</body>
</html>

