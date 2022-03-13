<?php
	session_start();
	if ($_REQUEST['submit']) {
		// code...
		$fread2=[];

		$email =$_REQUEST['email'];
		$oldpassword =$_REQUEST['oldpassword'];
		$newpassword = $_REQUEST['newpassword'];

		$file= fopen('../Models/List.txt', 'w');
		if (filesize('../Models/List.txt')>0) {
			// code...
			$read=fread($file,filesize('List.txt'));
                $fread2=explode(" ",$read);
                fclose($file);
		}
		for($i=0;$i<count($fread2);$i++){
                if($fread2[$i] == $email){
                    $fread2==$email;
                    $i++;
                    if($fread2[$i]== $oldpassword){
                        $fread2==$newpassword;
                    }
                    $file = fopen("../Models/List.txt", "w") or die("Unable to open file!");
                    fwrite($file, $fread2);
                    fclose($file);
                    header('location: ../Views/Login.php');

                }
                else{
                    echo 'Password does  not match ';
                }
               
            }
	}

?>