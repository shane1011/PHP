<?php

session_start();

$_SESSION['username'] = "shane1011";
$_SESSION['password'] = "shane1011";

if (isset($_POST['btnLogin'])) {

	if ($_POST['txtUsername'] == $_SESSION['username']) {

		if($_POST['txtPass'] == $_SESSION['password']) {
			$_SESSION['messages'] = "Login Succesful";

		
		} else {

		  	$_SESSION['messages'] = "Incorrect Password";

		
		}
	
	} else {

		$_SESSION['messages'] = "This account does not exist";
	}
	header("Location: LoginForm.php");

}


?>

