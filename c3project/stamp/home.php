<?php 

// include the session
include "partials/session.php";

// include the view
include "views/home.tpl";

// include the stamp model
include "models/stamp.php";

// get the class filter
$class = isset($_GET["class"]) ? $_GET["class"] : "";

// get the list of stamps

$stamps = $class ? getStampByClass($class) : getAllStamps();