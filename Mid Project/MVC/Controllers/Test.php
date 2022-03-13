<?php
session_start();
	if (isset($_REQUEST['submit'])) {
		// code...
		$coursername = $_REQUEST['coursename'];
		$testlink = $_REQUEST['testlink'];

		if ($coursername != null && $testlink != null) 
		{
			// code...

			$user = $coursername."|".$testlink."\r\n";
			$file = fopen('../Models/Test.txt', 'a');
			fwrite($file, $user);
			fclose($file);

			echo "Submitted";

			header('Location: ../Views/Dashboard.php');


		}
		else
		{
			echo "Null Submission";
		}
}

?>