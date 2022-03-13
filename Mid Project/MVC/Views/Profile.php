<?php 

	include('header.php');
?>

<html>
<head>
	<title>Profil</title>
</head>
<body>
	
	<a href="Dashboard.php"> Back </a> |
	<a href="../controllers/logout.php" > logout </a>
	<br><br>
		<fieldset>
			<legend>Profile Details</legend>
		<table border="1" >

			<tr>
				<td>ID</td>
				<td>Name</td>
				<td>Username</td>
				<td>Password</td>
				<td>Email</td>
				<td>DOB</td>
				<td>Blood Group</td>
				<td>Gender</td>
				<td>CV</td>
				<td>ACTION</td>
			</tr>

			<?php 
				$file = fopen('../Models/List.txt', 'r');
				
				while (!feof($file)) {
					$user = fgets($file);
					if($user == null){
						break;
					}
					
					$userArray = explode("|", $user);
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
					<a href="profiledit.php?id=<?=$userArray[0]?>"> EDIT </a>  
					  
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