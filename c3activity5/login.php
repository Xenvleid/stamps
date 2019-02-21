<?php
    $error = isset($_GET["error"]);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body style=text-align: "center";>
	<h1>Login</h1>
    
  <?php if($error) { ?>
<p style="color:red">Username or password incorrect</p> <?php } ?>
    
<form action="submit.php" method="post">
		<input type="text" name="user" placeholder="Enter your username" /><br>
		<input type="password" name="pass" placeholder="Enter your password" /><br>
		<button type="submit">Login</button>
	</form>
</body>
</html>

<!-- o    
1. Lead the class to create a sign-in form. Create a folder with two files: “login.php” and “submit.php”. 
2. Create an HTML form in “login.php” which action points to “submit.php” and method is POST. 
3. Add two fields “username” and “password” and a submit button. Once the information is submitted, 
get the data on “submit.php” and check if the username is “admin” and pass is “pass1234”.
4. If the user/pass combination is not correct, redirect using header(“Location”) sending the error message 
via GET and display it on the page “login.php”. Else die() a message. -->