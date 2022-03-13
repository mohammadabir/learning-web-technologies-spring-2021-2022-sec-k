<?php 
	include('header.php');

	$id = $_GET['id'];

	$file = fopen('../Models/StudentList.txt', 'r');

	while (!feof($file)) {
		$suser = fgets($file);
		$userArray = explode('|', $suser);
		if($userArray[0] == $id){
			break;
		}
	}
?>

<html>
<head>
	<title>Edit Profile</title>
</head>
<body>

	<a href="Studentlist.php"> Back </a> |
	<a href="../Controllers/Logout.php"> logout </a>
	<br><br>

	<form method="POST" action="../Controllers/update.php">
		<input type="hidden" name="id" value="<?=$id?>"/>
		
		<fieldset>
			<legend>Update student Details</legend>
		<table>
			<tr>
				<td>ID Number</td>
				<td><input type="Number" name="id" value="<?=$userArray[0]?>"></td>
			</tr>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" value="<?=$userArray[1]?>"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email" value="<?=$userArray[2]?>"></td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" value="<?=$userArray[3]?>"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" value="<?=$userArray[4]?>"></td>
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
			
			
			
			<tr>
				<td>Gender</td>
				<td><input type="radio" name="gender" value="Male"> Male 
				<input type="radio" name="gender" value="Female"> Female 
				<input type="radio" name="gender" value="Others"> Other </td>
			</tr>
			<tr>
				<td>DOB</td>
				<td><input type="date" name="dob" value="<?=$userArray[6]?>"></td>                  
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