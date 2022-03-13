<?php 
	session_start();
	
	if(isset($_REQUEST['update'])){
		$id = $_REQUEST['id'];
		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$clas = $_REQUEST['clas'];
		$course = $_REQUEST['course'];
		$gender = $_REQUEST['gender'];
		$dob = $_REQUEST['dob'];
		

		if($id != null && $name != null && $email != null && $username != null && $password != null && $clas != null && $course != null && $gender != null && $dob != null){
			
			$file = fopen('../Models/StudentList.txt', 'r');
			$updatedContent = "";

			while(!feof($file)){
				$line = fgets($file);
				$suser = explode('|', $line);
				
				if($suser[0] == $id){
					$line = $id."|".$name."|".$email."|".$username."|".$password."|".$clas."|".$course."|".$gender."|".$dob."\r\n";
					//$updatedContent .= $line;
				}
				$updatedContent .= $line;
				
			}

			$file = fopen('../Models/StudentList.txt', 'w');
			fwrite($file, $updatedContent);
			header('location: ../Views/StudentList.php');

		}else{
			echo "null submission";
		}
	}
?>
