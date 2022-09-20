<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/styte.css') }}">
</head>
<body>
	@include('layouts.header')

	<div id="content">
		<h1>TemPlate - TEST</h1>

		@yield('Noidung_content1')
		@yield('Noidung_content2')

	</div>

	@include('layouts.footer')
</body>
</html>