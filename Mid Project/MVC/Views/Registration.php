<html>
<head>
	<title>Registration</title>
</head>
<body>
	<form method="POST" action="../Controllers/RegistrationCheck.php" enctype="multipart/form-data">
		<fieldset style="width: 500px;">
		<legend>Registration</legend>
		
		<table>
			<tr>
				<td>ID Number</td>
		<td><input type="Number" name="id" value=""></td>
	</tr>

			<tr>
				<td>Name</td>
				<td><input type="text" name="name" value=""></td>
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
				<td>Email</td>
				<td><input type="email" name="email" value=""></td>
			</tr>
			<tr>
				<td>DOB</td>
				<td><input type="date" name="dob" ></td>                  
			</tr>
			
			<tr>
				<td>Blood Group</td>
				<td>
					<select name="blood_group">
						<option>Choose One</option>
						<option>A+</option>
						<option>A-</option>
						<option>B+</option>
						<option>B-</option>
						<option>AB+</option>
						<option>AB-</option>
						<option>O+</option>
						<option>O-</option>
					</select>

				</td>
			<tr>
				<td>Gender</td>
				<td><input type="radio" name="gender" value="Male"> Male 
				<input type="radio" name="gender" value="Female"> Female 
				<input type="radio" name="gender" value="Others"> Other </td>
			</tr>
			<tr>
				<td>Drop CV</td>
				<td><input type="file" name="document"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
		</fieldset>
	</form>
</body>
</html>