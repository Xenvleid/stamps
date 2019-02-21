<?php

// check if the image and ID exists
if( ! isset($_FILES["image"])) die("Error image was not submitted");
if(empty($_POST["id"])) die("Error ID was not submitted");

// get the path to the temporal image
$id = $_POST["id"];
$tmpFile = $_FILES["image"]["tmp_name"];

// copy the image to the final location
copy($tmpFile, "images/$id.jpg");

// include the message view
$text = "Your driver's license was submitted correctly";
include "views/message.php";
