<?php
	$name = "Juancito";

	$isPersonLoggedIn = true;

	$hidden = $isPersonLoggedIn ? "" : "hidden";

	$person = [
		"name" => "Teresa",
		"age" => "19",
		"position" => "HR Manager",
		"gender" => "F",
		"bio" => "Teresa is an young entepreanure living in Miami who likes ice screan and watches superheroes movies at night. She is a happy fellow.",
		"picture" => "https://www.imagen.com.mx/assets/img/imagen_share.png"
	];

	$picture = "https://cdn.kastatic.org/ka-perseus-images/c22f1ccafd1491f46d498515dbd37be481a3a144.png";

	$cart = ["milk", "eggs", "cauliflower", "yogurt", "heavy cream", "bananas", "sour cream", "ice cream", "cuban bread"];

	$people = [
		["id"=>"1", "name"=>"Rolando", "class"=>"WEB1010", "mood"=>"Sad"],
		["id"=>"2", "name"=>"Salvi", "class"=>"COP1000", "mood"=>"Happy"],
		["id"=>"3", "name"=>"Daylan", "class"=>"WEB1100", "mood"=>"Content"],
		["id"=>"4", "name"=>"Maurice", "class"=>"PHP1000", "mood"=>"Pissed"],
		["id"=>"5", "name"=>"Julio", "class"=>"PCP1000", "mood"=>"Hyper"],
	];

	$personSelected = "2";

//	print_r($people[2]["name"]); exit;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Class 3</title>
	<style type="text/css">
		.thumbnail {
			width: 200px;
			height: 200px;
		}
		.grey {
			background-color: grey;
		}
		.pink {
			background-color: pink;
		}
		.hidden {
			display: none;
		}
	</style>
</head>
<body>
	<div id="profile" class="<?= $hidden ?>">
		<!-- PARAGRAPH -->
		<h1>Header 1</h1>
		<?php echo "<p>Hola $name</p>"; ?>
		<p>Hola <?php echo $name; ?></p>
		<p>Hola <?= $name ?></p>
		<p>Hola Salvi</p>
		<a href="#gender">Select your gender</a>

		<!-- IMAGE -->
		<img class="thumbnail" alt="Image from the internet" src="<?= $picture ?>">

		<br/>
	</div>

	<!-- FORM ELEMENTS -->
	<textarea rows="10"><?= $person["bio"] ?></textarea>

	<br/>

	<label for="name">Type your name</label>
	<input id="name" type="text" name="name" value="<?= $person["name"] ?>"/>

	<br/>

	<!-- LIST -->
	<ul>
		<?php foreach ($cart as $item) { ?> 
			<li><?= $item ?></li>
		<?php } ?>
	</ul>

	<br/>

	<!-- SELECT -->
	<select id="gender">
		<option value="">Select your gender</option>
		<option value="M" <?php if($person["gender"]=="M"){ ?>selected<?php } ?>>Male</option>
		<option value="F" <?php if($person["gender"]=="F") echo "selected"; ?>>Female</option>
	</select>

	<br/>

	<!-- DYNAMICALLY CREATED SELECT -->
	<select>
		<option value="">Select your product</option>
		<?php foreach($people as $item) { ?>
			<?php $selected = ($item["id"]==$personSelected) ? "selected" : "" ?>
			<option <?= $selected ?> value="<?= $item["id"] ?>"><?= $item["name"] ?></option>
		<?php } ?>
	</select>

	<br/>
	<br/>

	<button onclick="showElements()">Submit</button>

	<br/>
	<br/>

	<!-- DYNAMIC TABLE -->
	<table border="1">
		<tr>
			<th>Number</th>
			<th>Name</th>
			<th>Class</th>
			<th>Mood</th>
		</tr>
		<?php for($i=0; $i<count($people); $i++) { ?>
			<?php $zebra = ($i%2==0) ? "grey" : "pink" ?>
			<tr class="<?= $zebra ?>">
				<td><?= $i ?></td>
				<td><?= $people[$i]["name"] ?></td>
				<td><?= $people[$i]["class"] ?></td>
				<td><?= $people[$i]["mood"] ?></td>
			</tr>
		<?php } ?>
	</table>

	<script type="text/javascript">
		function showElements() {
			var element = document.getElementById('profile');
			if(element.className == "hidden") element.className = "";
			else element.className = "hidden";
		}
	</script>
</body>
</html>