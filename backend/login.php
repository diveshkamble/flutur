<?php
session_start();
if (isset($_POST['submit'])) {
	
	include 'db.php';

	$user = mysqli_real_escape_string($conn, $_POST['unameEmail']);
	$pwd = mysqli_real_escape_string($conn, $_POST['password']);

	if (empty($user) || empty($pwd)) {
		header("Location: ../index.php?login=empty");
		exit();
	} else {
		$sql = "SELECT * FROM users WHERE user_email='$user' OR username='$user'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck < 1) {
			header("Location: ../index.php?login=not_registered");
			exit();
		} else {
			if ($row = mysqli_fetch_assoc($result)) {
				$pass =  $row['pwd'];
				if ($pass != $pwd) {
					header("Location: ../index.php?login=invalidpwd");
					exit();
				} elseif ($pass == $pwd) {
					$_SESSION['login_session_username']=$row['username'];
					$_SESSION['login_session_email']=$row['user_email'];
					$_SESSION['login_session_first_name']=$row['first_name'];
					$_SESSION['login_session_last_name']=$row['last_name'];
					header("Location: ../user_welcome.php");
					exit();
				}
			}
		}
	}
} else {
	header("Location: ../index.php?login=error");
	exit();
}
