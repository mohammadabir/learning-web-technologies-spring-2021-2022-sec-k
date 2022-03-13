<!DOCTYPE html>
<html>
<head>
	
	<title>Manage Test</title>
</head>
<body>

	<form method="POST" action="../Controllers/Test.php">
		<fieldset>
			
			<legend>Manage Test</legend>
			<table>
				<tr>
					<td>Course Name</td>
					<td><input type="text" name="coursename"></td>
				</tr>
			<tr>
				<td>Course Test</td>
				<td><input type="text" name="testlink" value=""></td>

			</tr>
			<td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</td>
			</table>
		</fieldset>
	</form>

</body>
</html>