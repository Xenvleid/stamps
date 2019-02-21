<?php
//	$hello = "hola";
//	if(isset($hello)) echo "defined";
//	else echo "undefined";
//	exit;

	$msg = isset($_GET["msg"]) ? $_GET["msg"] : "No message to show";

//	if(isset($_GET["msg"])) {
// 		$msg = $_GET["msg"];
//	}else{
// 		$msg = "No message to show";
//	}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Check name</title>
    <style>
        body {
            text-align: "center";
        }
    </style>
</head>
<body>
	<h1>Check your name</h1>
	<p><?= $msg ?></p>
	<form action="checkName.php" method="post">
		<input type="text" name="person" placeholder="Enter your name" /><br>
		<input type="text" name="age" placeholder="Enter your age"/><br>
		<button type="submit">Send</button>
	</form>
</body>
</html>