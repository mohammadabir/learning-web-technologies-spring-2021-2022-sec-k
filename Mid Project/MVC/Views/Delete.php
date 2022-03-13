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

<!DOCTYPE html>
<html>
<head>
	<title>Delete Student</title>
</head>
<body>
	<form method="post" action="./list.php">
		<fieldset>
			<legend>Delete Student</legend>
				<td><input type="text" name="delete" />  
				<input type="submit" name="delete" value="Delete" /><a href="StudentList.php">   Back<br></td>
		</fieldset>
	   

	<br /><br />
</body>
</html>