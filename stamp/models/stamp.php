<?php

function getAllStamps() {
	// include the database
	include "partials/database.php";

	// call the database
	return $conn->query("SELECT * FROM stamp ORDER BY Date_Added ASC");
}

function getStampById($id) {
	// include the database
	include "partials/database.php";

	// call the database and get the mysqli object
	$response = $conn->query("SELECT * FROM stamp WHERE id = '$id'");

	// return the first and only row
	return $response->fetch_assoc();
}

function getStampByCollection($collection) {
	// include the database
	include "partials/database.php";

	// call the database
	return $conn->query("SELECT * FROM stamp WHERE class = '$collection' ORDER BY name ASC");
}

function addNewStamp($image, $name_collection, $year, $size, $amount, $glued, $description) {
	// include the database
	include "partials/database.php";

	// call the database
	$conn->query("INSERT INTO stamp (image,name_collection,year,size,amount,glued,description) VALUES ('$image', '$name_collection','$year','$size', '$amount', '$glued', '$description')");
}

function updateStamp($id, $image, $name_collection, $year, $size, $amount, $glued, $description) {
	// include the database
	include "partials/database.php";

	// call the database
	$conn->query("UPDATE stamp SET image='$image', name_collection='$name_collection', year='$year', size='$size', amount='$amount', glued='$glued', description='$description' WHERE id='$id'");
}

function deleteStamp($id) {
	// do not allow blank values
	if(empty($id)) return;

	// include the database
	include "partials/database.php";

	// call the database
	$conn->query("DELETE FROM stamp WHERE id='$id'");
}
