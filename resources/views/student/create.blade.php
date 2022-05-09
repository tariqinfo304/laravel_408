<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>

	@if(!empty($obj))
		Edit Student
	@else
	 Add Student
	@endif 
</title>
</head>
<body>

	<form method="POST" 


		@if(!empty($obj))

			action="{{ URL('student',$obj->id) }}"
		@else
			action="{{ URL('student') }}"
		@endif

		>
		<!--  Cross-Site Request Forgery (CSRF) is an attack that forces authenticated users to submit a request to a Web application against which they are currently authenticated
		 -->
		@csrf()

		@if(!empty($obj))
			@method("PUT")
		@endif
		
		@if(!empty($obj))
			<input type="hidden" name="id" value="{{ $obj->id }}">
		@endif



		<label>Name</label>
		<input type="text" name="name" 

		@if(!empty($obj))
		value = "{{ $obj->name }}"
		@endif

		/>
		<hr/>
		<label>Age</label>
		<input type="text" name="age"

		@if(!empty($obj))
		value = "{{ $obj->age }}"
		@endif

		/>
		<hr/>
		<label>CNIC</label>
		<input type="text" name="cnic"

		@if(!empty($obj))
		value = "{{ $obj->cnic }}"
		@endif

		/>
		<hr/>
		<label>Height</label>
		<input type="text" name="height"

		@if(!empty($obj))
		value = "{{ $obj->height }}"
		@endif
		/>
		<hr/>
		<label>Roll No</label>
		<input type="text" name="roll_no"

		@if(!empty($obj))
		value = "{{ $obj->roll_no }}"
		@endif
		/>
		<hr/>
		<input type="submit"

		@if(!empty($obj))
			
			value="Edit Student"

		@else
			value="Add Student"
		@endif
		  />
	</form>
</body>
</html>