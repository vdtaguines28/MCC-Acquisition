<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title')</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
	<link rel="stylesheet" href="{{ URL::asset('assets/css/app.css') }}" type="text/css">
  
  <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
	
	<link rel="stylesheet" href="{{ URL::asset('assets/vendor/animate.css') }}" type="text/css"> 
	
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/vendor/fancybox/dist/jquery.fancybox.min.css') }}">
	
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets//vendor/slick-1.8.0/slick/slick.css') }}"/>
	
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/vendor/slick-1.8.0/slick/slick-theme.css') }}"/>

	@yield('head')
</head>

<body>
	@yield('body')
	<script type="text/javascript" src="{{ URL::asset('assets/js/app.min.js') }}"></script>
</body>
</html>
