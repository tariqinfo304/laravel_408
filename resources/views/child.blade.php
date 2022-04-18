@extends("parent")

@section("title")
	Child Page
@endsection

@section("header")
	
	@parent
	<p>Child Header</p>

@endsection