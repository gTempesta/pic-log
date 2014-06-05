<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Track your pictures with Pic-Log</title>
	
	<link rel="icon" type="image/png" href="{{asset('site/assets/img/favicon.ico')}}">

	<link href="{{ asset('site/assets/css/bootstrap.min.css') }}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('site/assets/css/font-awesome-4.1.0/css/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{asset('site/assets/css/pl.css')}}">

	<script src="{{asset('site/assets/js/jquery.js')}}"></script>
	<script src="{{asset('site/assets/js/bootstrap.js')}}"></script>

</head>
<body>
<div id="layout">
	<div class="header">
			<div class="logo">
		    	<strong>
		    		<a href="{{ route('home') }}">
		    		PIC-LOG	
		    		</a>
		    	</strong>
		    </div>
		    @include('site::_partials.navigation')
	</div>
	

