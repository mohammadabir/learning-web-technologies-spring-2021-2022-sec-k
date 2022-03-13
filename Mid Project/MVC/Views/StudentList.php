<?php 
	include('header.php');
?>


<html>
<head>
	<title>Student List</title>
</head>
<body>

	<a href="Dashboard.php"> Back </a> |
	<a href="../controllers/logout.php"> logout </a>
	<br><br>
	<fieldset>
		<legend>Student List</legend>
		<table border="1">
			<tr>
				<td>ID</td>
				<td>Name</td>
				<td>Email</td>
				<td>Username</td>
				<td>Password</td>
				<td>Class</td>
				<td>Courses</td>
				<td>Gender</td>
				<td>Date of Birth</td>
				<td>ACTION</td>
			</tr>

			<?php 
				$file = fopen('../Models/StudentList.txt', 'r');
				
				while (!feof($file)) {
					$suser = fgets($file);
					if($suser == null){
						break;
					}
					
					$userArray = explode("|", $suser);
			?>

			<tr>
				<td><?=$userArray[0]?></td>
				<td><?=$userArray[1]?></td>
				<td><?=$userArray[2]?></td>
				<td><?=$userArray[3]?></td>
				<td><?=$userArray[4]?></td>
				<td><?=$userArray[5]?></td>
				<td><?=$userArray[6]?></td>
				<td><?=$userArray[7]?></td>
				<td><?=$userArray[8]?></td>
				<td>
					<a href="edit.php?id=<?=$userArray[0]?>"> EDIT </a>  
					<a href="delete.php?id=<?=$userArray[0]?>"> DELETE </a>  
				</td>
			</tr>
	<?php
	}
	?>
		</table>
		</fieldset>
	</form>
	</body>
</html>