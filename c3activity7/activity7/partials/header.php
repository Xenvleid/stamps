<?php $pageName = ucfirst(str_replace(".php", "", basename($_SERVER["PHP_SELF"]))); ?>

<!DOCTYPE html>
<html>
<head>
	<title><?= $pageName ?></title>
	<link rel="stylesheet" type="text/css" href="css/styles.css"/>
</head>
<body>
	<!-- HEADER -->
	<header>
		<b>Driver's License</b>
		<div id="menu">
			<a href="upload.php" <?php if($pageName=="Upload") echo 'class="active"'; ?>>Upload</a> | 
			<a href="check.php" <?php if($pageName=="Check") echo 'class="active"'; ?>>Check</a>
		</div>
	</header>
