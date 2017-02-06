<?php
	session_start();
	include '../dbh.php';
	
	$uid = $_POST['uid'];
	$pwd = $_POST['pwd'];
	
	
	$sql = "SELECT * FROM users WHERE uid='$uid'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	$hash_pwd = $row['pwd'];
	$hash = password_verify($pwd, $hash_pwd);
	
	if ($hash == 0) {
		header('Location: ../index.php?error=empty');
		exit();
	} else {
		$sql = "SELECT * FROM users WHERE uid='$uid' 
		AND pwd='$hash_pwd'";
		$result = $conn->query($sql);
		
		if (!$row = $result->fetch_assoc()) {
			echo "Your username or password is incorrect!";
		} else {
			$_SESSION['id'] = $row['id'];
		}
		
		
		header('Location: ../index.php');
	}