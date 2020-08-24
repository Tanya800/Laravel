<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('titleBlock')</title>
	<link rel="stylesheet" type="text/css" href="css/app.css">
</head>
<header>@include('inc.menu')</header>
<body>
	<div>@include('inc.messages')</div>
	@yield('content')
</body>
</html>
