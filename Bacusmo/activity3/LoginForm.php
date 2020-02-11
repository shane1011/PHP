<?php session_start(); 
exec('messages'); 
 ?>

<!DOCTYPE html>
<html lang="en">
<html>
<head>

	<title>Login</title>
	<style>

	*{
		text-align: center;
		font-family: Century Gothic;
		border-radius: 25px;
		font-weight: bold;
		outline: none;
		color: white;
	}

body{
	background-color: teal;
}

input::placeholder {

	color:black;
}
	.button{

		background: teal;
		padding: 15px;
		color: white;
		margin: 25px;
	}

	.text{

		padding: 15px;
		margin: 25px;
		background-color: teal;
		color: white;
	}

	h1{
		font-weight: initial;
	}


	.messages{

		background-color: green;
		width:50%;
		margin-left:25%;
	}

	input::placeholder {

	color:white;
}

    </style>
</head>
<body>

	<?php

		if (isset($_SESSION['messages'])) { 

		?>

		<center><div class="messages"><h2> <?php echo $_SESSION['messages']; ?></h2></div></center>

	<?php 
} 
?>

	<form action="login.php" method="post" >
<br>
<br>
	<h1>Login</h1>
<center>
	<h2><form>
		<br>
		<br>
		<br>
		<br>
		Username <br>
		<input class="text" type="text" name="txtUsername" required> <br>
		Password <br>
		<input class="text" type="password" name="txtPass" required> <br>
    	<input class="button" type="Submit" name="btnLogin" value="Submit" >
	</h2></form>

</center>

</body>
</html>