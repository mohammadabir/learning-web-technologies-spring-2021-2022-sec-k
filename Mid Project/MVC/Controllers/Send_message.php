<?php
session_start();
	if (isset($_REQUEST['send'])) {
		// code...
		$id = $_REQUEST['id'];
		$email = $_REQUEST['email'];
		$message = $_REQUEST['message'];

		if ($id != null && $email != null && $message != null) 
		{
			// code...

			$user = $id."|".$email."|".$message."\r\n";

			$file = fopen('../Models/Message.txt', 'a');
			fwrite($file, $user);
			fclose($file);

			echo "Send this Message Successfully";

			header('Location: ../Views/chatbox.php');


		}
		else
		{
			echo "Null Submission";
		}
}

?>