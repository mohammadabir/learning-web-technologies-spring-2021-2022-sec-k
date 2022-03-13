<?php 
  include('header.php');
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<body>
<table>
	<form>
		<fieldset style="width: ;">
			<legend>Dashboard</legend>
			<h3>Welcome</h3>
			<a href="../Views/Profile.php" style="float: right;">Profile</a><br>
			<a href="../Views/Home.php" style="float: right;">Logout</a>
			<a href="Addstudent.php">Add Student</a><br>
			<a href="StudentList.php">Students List</a><br>
			<a href="Studentsgroup.php">Student Group</a><br>
			<a href="Managetest.php"> Test</a><br>
			<a href="Marks.php">Result</a><br>
			<a href="Checkpaper.php">Papers</a><br>
			<a href="Makecall.php">Class Meeting</a><br>
			<a href="chatbox.php">Messages</a>

		</fieldset>
	</form>
</table>
</body>
</html>