<?php

// include the session
include "partials/session.php";

// include the student model
include "models/stamp.php";

// get the ID to delete
$id = $_GET["id"];

// delete the student
deleteStamp($id);

// redirect to the table
header("Location: stamps.php");