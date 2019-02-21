<?php include "partials/header.php"; ?>

<h1>Check if your driver's license was uploaded</h1>

<form action="submitCheck.php" method="POST">
	<input type="text" name="id" required/><br>
	<button type="submit">Check</button>
</form>

<?php include "partials/footer.php"; ?>
