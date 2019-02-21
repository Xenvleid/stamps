<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Activity 3</title>
</head>
<body>

<?php
    $person = [
        "name" => "Teresa",
        "age" => "19",
        "position" => "HR Manager",
        "gender" => "F",
        "bio" => "Teresa is an young entepreanure living in Miami who likes ice screan and watches superheroes movies at night. She is a happy fellow.",
        "picture" => "https://www.imagen.com.mx/assets/img/imagen_share.png"
    ];
?>

<h1>Profile</h1>
<img class="thumbnail" alt="teresita de calcuta" src="<?= $person["picture"] ?>">
<p><?= $person["name"]?></p>
<p><?= $person["age"] ?> years old</p>
<p>Hola <?= $person["name"]?></p>




</body>

</html>