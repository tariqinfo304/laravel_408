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

	@if ($errors->any())
	    <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif

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
		@else
		value="{{old('name')}}"
		@endif

		/>
		@error("name")
			<p>{{ $message }}</p>
		@enderror
		<hr/>
		<label>Age</label>
		<input type="text" name="age"

		@if(!empty($obj))
		value = "{{ $obj->age }}"
		@else
		value="{{old('age')}}"
		@endif


		@error("age")

		style="border-color:red"

		@enderror

		/>
		@error("age")
			<p>{{ $message }}</p>
		@enderror
		<hr/>
		<label>CNIC</label>
		<input type="text" name="cnic"

		@if(!empty($obj))
		value = "{{ $obj->cnic }}"
		@else
		value="{{old('cnic')}}"
		@endif

		/>
		<hr/>
		<label>Height</label>
		<input type="text" name="height"

		@if(!empty($obj))
		value = "{{ $obj->height }}"
		@else
		value="{{old('height')}}"
		@endif
		/>
		<hr/>
		<label>Roll No</label>
		<input type="text" name="roll_no"

		@if(!empty($obj))
		value = "{{ $obj->roll_no }}"
		@else
		value="{{old('roll_no')}}"
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