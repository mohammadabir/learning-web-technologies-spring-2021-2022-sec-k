<?php 
	session_start();
	if (isset($_REQUEST['submit'])) 
	{
		// code...
			$id = $_REQUEST['id'];
			$name = $_REQUEST['name'];
			$username = $_REQUEST['username'];
			$password = $_REQUEST['password'];
			$email = $_REQUEST['email'];
			$dob = $_REQUEST['dob'];
			$blood_group = $_REQUEST['blood_group'];
			$gender = $_REQUEST['gender'];
			$document = $_FILES['document'];

		if ($id != null && $name != null && $username!= null && $password!= null && $email!= null && $dob!= null &&  $blood_group!= null && $gender!= null && $document!= null) 
		{
			// code...

			$user = $id."|".$name."|".$username."|".$password."|".$email."|".$dob."|".$blood_group."|".$gender."|".$document."\r\n";

			$file = fopen('../Models/List.txt', 'a');
			fwrite($file, $user);
			fclose($file);
			echo "Registration Completed..!";

			header('Location: ../Views/Login.php');
		}
		else{
			echo "null submission";
		}
	}

 ?>