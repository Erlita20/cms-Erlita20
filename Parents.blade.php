<!DOCTYPE html>
<html lang="{{ str_replace('_','_', app()->getLocale()) }}">
<body>
	<div id="app">
		@section('sidebar')
		ini adalah master sidebar
		@show
	</div>

	<main class="py-4">
		@yield('content')
	</main>

	<main class="py-4">
		<p align="center">
			Saya Erlita Desy Cahyuni
		</p>
	</main>

	<main class="py-4">
		<p align="center">
			About :
		</p>
		@extends('AboutController')
	</main>	
</body>
</html>