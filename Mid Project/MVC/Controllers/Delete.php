<?php
session_start();

if(isset($_REQUEST['delete']))
{



$id = $_REQUEST['id'];
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$gender = $_REQUEST['gender'];
$dob = $_REQUEST['dob'];



if($id != null && $name != null && $email != null && $username !=null && $password != null && $gender != null && $dob != null)
{


	$file = fopen('../Models/StudentList.txt', 'r');
	$deletecontent="";

	while (!feof('../Models/StudentList.txt')) {
		// code...
		$line = fgets($file);

	}if ($suser[0]==$id) {
		// code...
		$line =$id."|".$name."|".$email."|".$username."|".$password."|".$gender."|".$dob."\r\n";

	}

	$deletecontent.=$line;
}

$file = fopen('../Models/StudentList.txt', 'w');
fwrite($file, $deletecontent);
fclose($file);
//header('location: ../Views/StudentList.php');
echo "Student Added";
}

else
{
echo "null submission";

}
}
?>