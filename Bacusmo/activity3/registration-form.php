<!DOCTYPE html>
<html>
<head>
	<title>Register</title>


<style>

*{
		
		font-family: Century Gothic;
		border-radius: 25px;
		font-weight: bold;
		outline: none;
		margin: 15px;
		background-color: teal;
		text-align: center;
	
}

h1{
	font-weight: initial;
}


.button{

		padding: 15px;
		color: white;
		margin:15px;
		width: 75%;
		float: right;
		top: 100px;
		bottom: 15px;
	}

.button2{

		padding: 15px;
		color: white;
		width: 75%;
		top: 200px;

	}


.title{
	color: white;
}

.text {

	position: left;
	text-align: center;
	border-radius: 25px;
	padding: 15px;
	color: white;
	align-content: center;
}

form {
	color: white;

}

.details {
	margin-left:30%;
	position: absolute;
    left:0px;
}

.details2 {
	margin-right:30%;
	position: absolute;
	right:0px;
	color: white;
	top:149px;
}

select {
	padding: 15px;
	color: white;
	font-size: 15px;
	outline: none;
	width: 85%;
}


</style>

</head>
<body>
<form action="data.php" method="post" >
<br>
<br>
<br>
	<h1 class="title">Create an account</h1>
<div class="details">
	<h2><form class="form">
<br>
Account Details                                  
<br>
<br>
<br>
<br>

Username <br>
<input class="text" type="text" name="txtUsername" required><br><br>
Email <br>
<input class="text" type="text" name="txtEmail" required><br><br>
Password <br>
<input class="text" type="password" name="txtPass" required><br><br>
Confirm Password<br>
<input class="text" type="password" name="txtPass2" required><br> <br>
<div class="button"><input class="button" type="Submit" name="btnSubmit" value="Sign Up" ></div>
	</h2>
</div>

<div class="details2">
<br>
<br>
<h2>Profile Details
<br>
<br>
<br>
<br>
Name<br>
<input class="text" type="text" name="txtName" required><br><br>
Address<br>
<input class="text" type="text" name="txtAddress" required><br><br>
Gender <br>
<select>
	<option>Male</option>
	<option>Female</option>
	<option>Other</option>
</select>
<br>
<br>
Birthday<br>
<input class="text" type="date" name="txtBirthday">
</h2>
<div class="button">
<input class="button2" type="reset" name="btnClear" value="reset">
</div>
</form>

</body>
</html>