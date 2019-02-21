<?php include "partials/header.php"; ?>

<h1>Upload your driver's license</h1>

<form action="submitUpload.php" method="POST" enctype="multipart/form-data">
	<input type="text" name="id" required/><br>
	<input type="file" name="image" required/><br>
	<button type="submit">Upload</button>
</form>

<?php include "partials/footer.php"; ?>
