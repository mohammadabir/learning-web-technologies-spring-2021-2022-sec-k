<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Create a Meeting</title>
</head>
<body>
	<form method="POST" action="../Controllers/Meeting.php">
		<fieldset>
			<legend>Create a Class Meeting</legend>
			<a href="../Views/Dashboard.php" style="float: right;">Back</a><br>
			<a href="../Views/Home.php" style="float: right;">Logout</a>
			<table>
				<a href="https://meet.google.com/pow-kzka-ywi"> Join the call</a>
				<tr>
					<td>Course Name</td>
					<td><input type="text" name="coursename"></td>
				</tr>
				<tr>
					<td>Meeting Link</td>
					<td><input type="Link" name="meetinglink"></td>
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