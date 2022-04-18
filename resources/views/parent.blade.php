<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield("title","Home")</title>


	@section("css")
	@show
	
</head>
<body>


	@section("header")

	<h1>Parent Header</h1>
	@show

	@section("menu")
	<h1>Parent Menu</h1>
	@show


	@section("content")
	<h1>Parent Main Conetnt</h1>
	@show




	@section("js")
	@show

	@section("footer")
		<h1>Parent Footer</h1>
	@show

</body>
</html>