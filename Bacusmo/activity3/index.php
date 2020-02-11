!DOCTYPE html>
<html>
<head>
	<title>Form</title>

	<style >
		*{
			font-family: "Century Gothic";
			font-size: 20px;
			text-align: center;
			width: 300px;
		}
	</style>
</head>
<body>

<form action="process.php" method="post" name="frmContact">
	<input type="text" name="txtName" placeholder="Username" required> 
	<input type="email" name="txtEmail" placeholder="Email"> 
	<input type="password" name="txtPass" placeholder="Password" required>
	<input type="text" name="txtMessage" placeholder="Message"> <br><br>
	<button><input type="submit" value="Submit" name="btnSubmit">
    <input type="reset" value="Clear" name="btnClear"></button>

</form>
</body>
</html>

<?php 

// This is a Comment 

/*

	Date-Written: January 28, 2020

	page: index.php
	description: Home page

*/

/*	$var = "<em>Shane John Bacusmo</em>";

	echo '<h1> Hello '.$var.' ! </h1>';
	print('<h2> This is your first php script </h2>');

	$value = 5;

	if ($value %2 == 0) {

		echo 'this is an even number';

	} else {

		echo 'this is an odd number';
	}


	$array = array('car', 'house', 'money', 'love');

	for ($ctr = 0; $ctr<4; $ctr++) {

		echo 'Wish list: ' . $array[$ctr] . '<br>';
	}


	$cities = array('Marikina', 'Quezon', 'Pasay', 'Pasig', 'Makati', 'Mandaluyong', 'Knpp');

	echo '<select>';
		 for ($ctr = 0; $ctr <7; $ctr++) {
		 	echo '<option>' .$cities[$ctr]. '</option>';
		 }
	echo '</select>';


	$arrayName = array('Red' => 'Apple', 'Orange' => 'Carrot', 'Green' => 'WaterMelon');

	echo '<select>';
		foreach ($arrayName as $key => $value) {

			echo '<option value= ' .$key.'>' .$value. '</option>';
	}
	echo '</select>';


*/


?>