<html>
<head>

	<title>Add Student</title>
</head>
<body>

	<form method="POST" action="../Controllers/Addcheck.php" enctype="multipart/form-data">

	<a href="Dashboard.php">Back</a>



<fieldset style="width:500px">
	<legend>Add Student</legend>

<table>
	

	<tr>
	<td>ID Number</td>
		<td><input type="Number" name="id" value=""></td>

	<tr>
	<td>Name</td>
		<td><input type="text" name="name" value=""></td>
	</tr>

	<tr>
	<td>Email</td>
		<td><input type="email" name="email" value=""></td>
	</tr>
	<tr>

	<td>Username</td>
		<td><input type="text" name="username" value=""></td>
	</tr>
	<tr>
	<td>Password</td>
		<td><input type="password" name="password" value=""></td>
	</tr>
	<tr>
		<td>Class</td>
		<td><input type="text" name="clas"></td>
		</td>
	</tr>

	<tr>
		<td>Course</td>
		<td>
			<input type="text" name="course" value=""><br>
			
		</td>
	</tr>

	<tr>
		<td>Gender</td>
			
			
				<td><input type="radio" name="gender" value="Male">Male
				<input type="radio" name="gender" value="Female">Female
				<input type="radio" name="gender" value="Others">Others
				</td>
		
	</tr>



	<tr>
		<td>Date of Birth</td>
			<td><input type="date" name="dob" value=""></td>
		
	</tr>



	<tr>
	<td></td>
		<td><input type="submit" name="submit" value="Submit"></td>
		<td><input type="reset" name="reset" value="Reset"></td>
	</tr>


	</table>


		
	</form>

	</fieldset>




	</body>





</html>