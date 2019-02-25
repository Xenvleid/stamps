<?php include "partials/header.tpl"; ?>

<h1>List of Stamps</h1>

<p>
	<a href="stamps.php">Stamps by Year</a> | 
	<a href="stamps.php?sort=amount">Sorted by Amount</a> | 
	<a href="stamps.php?sort=glued">Stamps Glued</a>
</p>

<link rel="stylesheet" href="css/list.css">
<link rel="stylesheet" href="css/bootstrap.css">
<table id="stable" class="table table-striped table-bordered" style="width:100%">>
	<tr>
		<th>Stamp Name</th>
		<th>Name of Collection</th>
		<th>Year</th>
		<th>Size</th>
		<th>Amount Owned</th>
		<th>Amount Glued</th>
		<th>Description</th>
	</tr>
	<?php foreach ($stamps as $stamp) { ?>
	<tr>
		<td><img class= "img-thumbnail" src="images/<?= $stamp["image"] ?>" alt="<?= $stamp["name_collection"] ?>"></td>
		<td><?= $stamp["name_collection"] ?></td>
		<td><?= $stamp["year"] ?></td>
		<td><?= $stamp["size"] ?></td>
		<td><?= $stamp["amount"] ?></td>
		<td><?= $stamp["glued"] ?></td>
		<td><?= $stamp["description"] ?></td>
		<td>
			<a href="editStamp.php?id=<?= $stamp["id"] ?>">&#9998; Edit</a>
			<a href="deleteStamp.php?id=<?= $stamp["id"] ?>">&#10006; Delete</a>
		</td>
	</tr>
	<?php } ?>
</table>

<br>

<a href="addStamps.php">+ Add Stamp</a>

<?php include "partials/footer.tpl"; ?>