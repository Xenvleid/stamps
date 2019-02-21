<?php 

// include the session
include "partials/session.php";

// include the student model
include "models/stamp.php";

// get the params from post
$name_collection = $_POST["name_collection"];
$year = $_POST["year"];
$size = $_POST["size"];
$amount = $_POST["amount"];
$glued = $_POST["glued"];
$description = $_POST["description"];

// get the path to the temporal image
$tmpFile = $_FILES["image"]["tmp_name"];

// get the image name
$imageName = $_FILES["image"]["name"];

// copy the image to the final location
copy($tmpFile, "images/$imageName");

// save new student into the database
addNewStamp($imageName, $name_collection, $year, $size, $amount, $glued, $description);

// redirect to the table
header("Location: stamps.php");