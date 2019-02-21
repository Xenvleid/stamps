<?php include "partials/header.tpl"; ?>
<link rel="stylesheet" href="css/list.css">

<h1>Add a new stamp</h1>

<form action="submitAddStamp.php" method="POST" enctype="multipart/form-data">
	<label for="name">Image</label><br>
	<input id="name" type="file" name="image" required>
	<br><br>

	<label for="Collection">Collection</label><br>
	<input id="name_collection" type="text" name="name_collection" required>
	<br><br>

	<label for="Year">Year</label><br>
	<input id="year" type="number" name="year" required>
	<br><br>

	<label for="Size">Size</label><br>
	<input id="size" type="number" name="size" required>
	<br><br>

	<label for="Amount Owned">Amount Owned</label><br>
	<input id="amount" type="number" name="amount" required>
	<br><br>

	<label for="Amount Glued">Amount Glued</label><br>
	<input id="glued" type="text" name="glued" required>
	<br><br>

	<label for="Description">Description</label><br>
	<textarea id="description" name="description" required></textarea>
	<br><br>

	<a href="stamps.php">Go back</a>
	<button type="submit">Save</button>
</form>

<?php include "partials/footer.tpl"; ?>
