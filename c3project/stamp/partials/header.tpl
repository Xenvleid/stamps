<?php $pageName = ucfirst(str_replace(".php", "", basename($_SERVER["PHP_SELF"]))); ?>

<!DOCTYPE html>
<html>
<head>
	<title><?= $pageName ?></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="css/list.css"/>
</head>
<body>
	<header>
		<b class= "" >The Collection</b>
		<div class="topMenu" id="menu">
			<a href="home.php" <?php if($pageName=="Home") echo 'class="active"'; ?>>Home</a> | 
			<a href="stamps.php" <?php if($pageName=="Stamps") echo 'class="active"'; ?>>Stamps</a> |  
			<a href="about.php" <?php if($pageName=="About") echo 'class="active"'; ?>>About</a>  |
			<a href="submitLogout.php" class="logout">Logout</a>
		</div>
	</header>



