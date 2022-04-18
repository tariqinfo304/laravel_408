<table border="2">
	<thead>
		<tr>
			<td>ID</td>
			<td>Name</td>
		</tr>
	</thead>
	<tbody>

		@if(!empty($list))

			@foreach($list as $row)

				<tr>
					<td>{{ $row["id"] }}</td>
					<td>{{ $row["name"] }}</td>
				</tr>

			@endforeach
		@else

			<tr>
				<td colspan="2">Not Found Data</td>
			</tr>

		@endif
	</tbody>
</table>