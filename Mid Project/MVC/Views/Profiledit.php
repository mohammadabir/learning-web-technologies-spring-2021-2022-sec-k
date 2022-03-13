<?php 
	include('header.php');

	$id = $_GET['id'];

	$file = fopen('../Models/List.txt', 'r');

	while (!feof($file)) {
		$user = fgets($file);
		$userArray = explode('|', $user);
		if($userArray[0] == $id){
			break;
		}
	}
?>

<html>
<head>
	<title>Update Information</title>
</head>
<body>
	<a href="Profile.php"> Back </a> |
	<a href="../Controllers/Logout.php"> logout </a>
	<br><br>
	
	<form method="POST" action="../Controllers/Profile_edit.php" >
			<input type="hidden" name="id" value="<?=$id?>">

		<fieldset style="width: 500px;">
			<legend>Update Information</legend>
		
		<table>
			<tr>
				<td>ID </td>
				<td><input type="number" name="id" value="<?=$userArray[0]?>"></td>
			</tr>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" value="<?=$userArray[1]?>"></td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" value="<?=$userArray[2]?>"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" value="<?=$userArray[3]?>"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email" value="<?=$userArray[4]?>"></td>
			</tr>
			<tr>
				<td>DOB</td>
				<td><input type="date" name="dob" value="<?=$userArray[5]?>"></td>                  
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
				<td><input type="file" name="document" value="<?=$userArray[8]?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
		</fieldset>
	</form>
</body>
</html>