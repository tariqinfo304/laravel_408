<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>

	Add Student
</title>
</head>
<body>

	<form method="POST" 

			action="{{ URL('student') }}"
		>
		<!--  Cross-Site Request Forgery (CSRF) is an attack that forces authenticated users to submit a request to a Web application against which they are currently authenticated
		 -->
		@csrf()


		<label>Name</label>
		<input type="text" name="name" 



		/>
		<hr/>
		<label>Age</label>
		<input type="text" name="age"


		/>
		<hr/>
		<label>CNIC</label>
		<input type="text" name="cnic"



		/>
		<hr/>
		<label>Height</label>
		<input type="text" name="height"

		/>
		<hr/>
		<label>Roll No</label>
		<input type="text" name="roll_no"

		/>
		<hr/>
		<input type="submit"

value="Add Student"
		  />
	</form>
</body>
</html>