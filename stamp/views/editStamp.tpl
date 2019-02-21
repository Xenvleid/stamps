<?php include "partials/header.tpl"; ?>

<h1>Edit a Stamp</h1>

<form action="submitEditStamp.php" method="POST" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?= $stamp['id'] ?>">

	<label for="name">Image</label><br>
	<input id="name" type="file" name="image" required>
	<br><br>

	<label for="Collection">Collection</label><br>
	<input id="name_collection" type="text" name="name_collection" value="<?= $stamp['name_collection'] ?>" required>
	<br><br>

	<label for="Year">Year</label><br>
	<input id="year" type="number" name="year" value="<?= $stamp['year'] ?>" required>
	<br><br>

	<label for="Size">Size</label><br>
	<input id="size" type="number" name="size" value="<?= $stamp['size'] ?>" required>
	<br><br>

	<label for="Amount Owned">Amount Owned</label><br>
	<input id="amount" type="number" name="amount" value="<?= $stamp['amount'] ?>" required>
	<br><br>

	<label for="Amount Glued">Amount Glued</label><br>
	<input id="glued" type="number" name="glued" value="<?= $stamp['glued'] ?>" required>
	<br><br>

	<label for="Description">Description</label><br>
	<textarea id="description" name="description" required><?= $stamp['description'] ?></textarea>
	<br><br>
	<br><br>
	
	<a href="stamps.php">Go back</a>
	<button type="submit">Update</button>
</form>

<?php include "partials/footer.tpl"; ?>