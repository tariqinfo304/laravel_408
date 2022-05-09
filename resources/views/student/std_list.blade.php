<h1>Student Listing</h1>


<a href="{{ URL('student/create') }}">Add Student</a>
<hr/>
<table border="2">
	<thead>
		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>Age</td>
			<td>CNIC</td>
			<td>Height</td>
			<td>Roll_no</td>
			<td>Action</td>
		</tr>
	</thead>
	<tbody>

		@if(!empty($list))

			@foreach($list as $row)

				<tr>
					<td>{{ $row->id }}</td>
					<td>{{ $row->name }}</td>
					<td>{{ $row->age }}</td>
					<td>{{ $row->cnic }}</td>
					<td>{{ $row->height }}</td>
					<td>{{ $row->roll_no }}</td>
					<td>
						@php($url = "student/".$row->id."/edit")
						<a href="{{ URL($url) }}">Edit Student</a>
					</td>
					<td>
						@php($url = "student/".$row->id)
						<a href="{{ URL($url) }}">Delete Student</a>
					</td>
				</tr>

			@endforeach
		@else

			<tr>
				<td colspan="2">Not Found Data</td>
			</tr>

		@endif
	</tbody>
</table>