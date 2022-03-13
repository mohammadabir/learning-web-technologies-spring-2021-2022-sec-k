<?php
session_start();
	if (isset($_REQUEST['submit'])) {
		// code...
		$coursername = $_REQUEST['coursename'];
		$meetinglink = $_REQUEST['meetinglink'];

		if ($coursername != null && $meetinglink != null) 
		{
			// code...

			$user = $coursername."|".$meetinglink."\r\n";
			$file = fopen('../Models/Meeting.txt', 'a');
			fwrite($file, $user);
			fclose($file);

			echo "Submitted";

			//header('Location: ../Views/Makecall.php');


		}
		else
		{
			echo "Null Submission";
		}
}

?>