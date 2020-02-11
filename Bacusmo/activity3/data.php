<?php

session_start();

$txtUsername = $_SESSION['username'];
$txtPass = $_SESSION['password'];


if (isset($_POST['btnSubmit'])) {


	header("Location:LoginForm.php");
	exec('messages');


}


?>