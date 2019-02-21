<?php

// check if the ID exists
if(empty($_POST["id"])) die("Error ID was not submitted");

// get the ID from post
$id = $_POST["id"];

// copy the image to the final location
if(file_exists("images/$id.jpg")) $text = "Your driver's license was uploaded correctly";
else $text = "We could not find a driver's license for your ID";

// include the message view
include "views/message.php";
