<?php
	include 'dbconn.php';
	
	session_start();
	if(isset($_POST['submit'])){

		$first = $_POST['firstname'];
		$last = $_POST['lastname'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		if (empty($first) || empty($last) || empty($email) || empty($password)){
			header("Location: ../index.php?signup=empty");
			exit();
		}else{
			if(!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)){
				header("Location: ../index.php?signup=invalidcharecters");
				exit();
			}else{
				if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
					header("Location: ../index.php?signup=invalidemail");
					exit();
				}else{
					$hashedpwd = password_hash($password, PASSWORD_DEFAULT);
					$sql = "insert into users(firstname, lastname, email, password) values (?, ?, ?, ?);";
					$stmt = mysqli_stmt_init($conn);
					mysqli_stmt_prepare($stmt, $sql);
					mysqli_stmt_bind_param($stmt, 'ssss', $first, $last, $email, $hashedpwd);
					mysqli_stmt_execute($stmt);

					header("Location: ../index.php?signup=success");
				}
			}
		}
	}else{
		header("Location: ../index.php?signup=error");
		exit();
	}