<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{{ $title }}</title>
</head>
<body>
	<h1>{{ $name }}</h1>


	<table border="2">
		<thead>
			<tr>
				<td>ID</td>
				<td>Name</td>
			</tr>
		</thead>
		<tbody>
			@foreach($std_list as $row)

				<tr>
					<td>{{ $row["id"] }}</td>
					<td>{{ $row["name"] }}</td>
				</tr>

			@endforeach
		</tbody>
	</table>

	<hr/>

	@if($name == "Student List Table")
		<p>Okay</p>
	@else
		<p>No</p>
	@endif


	<hr/>

	@php($arr=[1,2,3,4])
	@php($i=0)

	<ul>
	@while($i < count($arr))

		<li>{{ $arr[$i] }}</li>

		@php($i++)
	@endwhile
	</ul>



	<ul>
	@for($i=0;$i < count($arr);$i++)

		<li>{{ $arr[$i] }}</li>
	@endfor
	</ul>



</body>
</html>