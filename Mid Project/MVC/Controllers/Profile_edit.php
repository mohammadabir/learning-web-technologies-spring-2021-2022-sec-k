<?php 
	session_start();
	
	if(isset($_REQUEST['update'])){
		$id = $_REQUEST['id'];
		$name = $_REQUEST['name'];
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$email = $_REQUEST['email'];
		$dob = $_REQUEST['dob'];
		$blood_group = $_REQUEST['blood_group'];
		$gender = $_REQUEST['gender'];
		$document = $_REQUEST['document'];
		
		

		if($id != null && $name != null && $username != null && $password != null && $email != null  && $dob != null &&$blood_group != null && $gender != null && $document != null  ){
			
			$file = fopen('../Models/List.txt', 'r');
			$updatedContent = "";

			while(!feof($file)){
				$line = fgets($file);
				$user = explode('|', $line);
				
				if($user[0] == $id){
					$line =$id."|".$name."|".$username."|".$password."|".$email."|".$dob."|".$blood_group."|".$gender."|".$dob."|".$document."\r\n";
					//$updatedContent .= $line;
				}
				$updatedContent .= $line;
				
			}

			$file = fopen('../Models/List.txt', 'w');
			fwrite($file, $updatedContent);
			header('location: ../Views/Profile.php');

		}else{
			echo "null submission";
		}
	}
?>
