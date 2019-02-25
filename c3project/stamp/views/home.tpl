<?php include "partials/header.tpl"; ?>

<h1 class= "homeWelcome">Welcome to your collection <?= $username ?></h1>

<p>Postage stamp collecting began at the same time that stamps were first issued, and by 1860 thousands of collectors and stamp dealers were appearing around the world as this new study and hobby spread across Europe, European colonies, the United States and other parts of the world.</p>

<p>Here you can find the tools necessary to digitally document all of yours stamps and view them online.</p>

<p><a href="stamps.php">Your Most Recent Collection</a></p>

<div id="stamps">
		<?php foreach ($stamps as $row) { ?>
		<div class="stamp-container">
			<a href="stamps.php?id=<?= $row["id"] ?>"><img class="stamp" src="img/<?= $row["picture"] ?>" alt=""></a>
			<p><?= $row["collection"] ?></p>
			<p><?= $row["description"] ?></p>
		</div>
		<?php } ?>
	</div>	

<?php include "partials/footer.tpl"; ?>
