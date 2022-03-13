<?php
session_start();

		if(isset($_REQUEST['submit']))
		{



			$id = $_REQUEST['id'];
			$name = $_REQUEST['name'];
			$email = $_REQUEST['email'];
			$username = $_REQUEST['username'];
			$password = $_REQUEST['password'];
			$clas =$_REQUEST['clas'];
			$course = $_REQUEST['course'];
			$gender = $_REQUEST['gender'];
			$dob = $_REQUEST['dob'];



		if($id != null && $name != null && $email != null && $username !=null && $password != null && $clas != null && $course != null && $gender != null && $dob != null)
			{




			$user =$id."|".$name."|".$email."|".$username."|".$password."|".$clas."|".$course."|".$gender."|".$dob."\r\n";



			$file = fopen('../Models/StudentList.txt', 'a');
			fwrite($file, $user);
			fclose($file);
			header('location: ../Views/StudentList.php');
			echo "Student Added";
			}

			else
			{
			echo "null submission";

		}
	}
?>