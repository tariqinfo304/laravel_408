<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>

	Delete Preview Record
</title>
</head>
<body>

	<form method="POST" 

			action="{{ URL('student',$obj->id) }}"
		>
		<!--  Cross-Site Request Forgery (CSRF) is an attack that forces authenticated users to submit a request to a Web application against which they are currently authenticated
		 -->
		@csrf()

		@if(!empty($obj))
			@method("DELETE")
		@endif
		
		@if(!empty($obj))
			<input type="hidden" name="id" value="{{ $obj->id }}">
		@endif



		<label>Name</label>
		<input type="text" name="name" 

		disabled 
		@if(!empty($obj))
		value = "{{ $obj->name }}"
		@endif

		/>
		<hr/>
		<label>Age</label>
		<input type="text" name="age"
disabled
		@if(!empty($obj))
		value = "{{ $obj->age }}"
		@endif

		/>
		<hr/>
		<label>CNIC</label>
		<input type="text" name="cnic"
disabled
		@if(!empty($obj))
		value = "{{ $obj->cnic }}"
		@endif

		/>
		<hr/>
		<label>Height</label>
		<input type="text" name="height"
disabled
		@if(!empty($obj))
		value = "{{ $obj->height }}"
		@endif
		/>
		<hr/>
		<label>Roll No</label>
		<input type="text" name="roll_no"
disabled
		@if(!empty($obj))
		value = "{{ $obj->roll_no }}"
		@endif
		/>
		<hr/>
		<input type="submit"

		value="are you sure to Delete Student"
		  />
	</form>
</body>
</html>