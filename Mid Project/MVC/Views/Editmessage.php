<?php 
	include('header.php');

	$id = $_GET['id'];

	$file = fopen('../Models/Message.txt', 'r');

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
	<title>Edit Message</title>
</head>
<body>

	<a href="MessageList.php"> Back </a> |
	<a href="../Controllers/Logout.php"> logout </a>
	<br><br>

	<form method="POST" action="../Controllers/Messageupdate.php">
		<input type="hidden" name="id" value="<?=$id?>"/>
		
		<fieldset>
			<legend>Update Message Details</legend>
		<table>
			<tr>
				<td>ID Number</td>
				<td><input type="Number" name="id" value="<?=$userArray[0]?>"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email" value="<?=$userArray[1]?>"></td>
			</tr>
			<tr>
		    <td>Write something</td>
		  		<td><input type="text" name="message" value="<?=$userArray[2]?>"></td>
		  	</tr>
		  		<td></td>
		  	<tr>
		    	<td></td>
		  		<td><input type="submit" name="update" value="Update"></td>
			</tr>
			
		</table>
		</fieldset>
	</form>
</body>
</html>