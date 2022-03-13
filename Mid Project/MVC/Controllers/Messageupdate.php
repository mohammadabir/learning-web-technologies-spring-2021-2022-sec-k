<?php 
	session_start();
	
	if(isset($_REQUEST['update'])){
		$id = $_REQUEST['id'];
		$email = $_REQUEST['email'];
		$message = $_REQUEST['message'];
		
		

		if($id != null && $email != null && $message != null){
			
			$file = fopen('../Models/Message.txt', 'r');
			$updated = "";

			while(!feof($file)){
				$line = fgets($file);
				$user = explode('|', $line);
				
				if($user[0] == $id){
					$line = $id."|".$email."|".$message."\r\n";
					//$updatedContent .= $line;
				}
				$updated .= $line;
				
			}

			$file = fopen('../Models/Message.txt', 'w');
			fwrite($file, $updated);
			header('location: ../Views/MessageList.php');

		}else{
			echo "null submission";
		}
	}
?>
