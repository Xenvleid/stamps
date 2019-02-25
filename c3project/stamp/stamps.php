<?php 

// include the session
include "partials/session.php";

// include the stamp model
include "models/stamp.php";

// get the sort type
$sort = isset($_GET["sort"]) ? $_GET["sort"] : "";

// get the right filter
if($sort == "amount") $stamps = getAllStampsByAmount();
elseif($sort == "glued") $stamps = getStampsGlued();
else $stamps = getAllStampsByYear();

// include the view
include "views/stamps.tpl";