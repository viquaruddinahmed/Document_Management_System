<?php
	session_start();
	 include 'dbconn.php';

	 if(isset($_POST['submit'])){
	 	$userid = mysqli_real_escape_string($conn, $_POST['email']);
	 	$pass = mysqli_real_escape_string($conn, $_POST['password']);

	 	if(empty($userid) || empty($pass)){
	 		header("Location: ../log_in.php?login=empty");
	 		exit();
	 	}else{
	 		$sql = "select * from users where email = '$userid';";
	 		$results = mysqli_query($conn, $sql);
	 		$resultcheck = mysqli_num_rows($results);
	 		if($resultcheck < 1){
	 			header("Location: ../log_in.php?login=error");
	 			exit();
	 		}
	 		else{
	 			if($row = mysqli_fetch_assoc($results)){
	 				$hashpwdcheck = password_verify($pass, $row['password']);
	 				if($hashpwdcheck == false){
	 					header("Location: ../log_in.php?login=error");
	 					exit();
	 				}elseif($hashpwdcheck == true){
	 					$_SESSION['email'] = $row['email'];
	 					$_SESSION['uname'] = $row['lastname'];

	 					header("Location: ../home.php?login=success");
	 					exit();
	 				}
	 			}
	 		}
	 	}

	  }else{
	 	header("Location: ../log_in.php?login=error");
	 	exit();
	 }