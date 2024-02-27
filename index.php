<?php require_once "array.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php foreach ($hotels as $hotel): ?>
    <ul>
        <li> <b>nome</b>
            <?= $hotel['name']?>
        </li>
    </ul>
    <ul>
        <li> <b>Descrizione</b>
            <?= $hotel['description']?>
        </li>
    </ul>
    <ul>
        <li> <b>parcheggio</b>
            <?= $hotel['parking']?>
        </li>
    </ul>
    <ul>
        <li> <b>voto</b>
            <?= $hotel['vote']?>
        </li>
    </ul>
    <ul>
        <li> <b>distanza dal centro</b>
            <?= $hotel['distance_to_center']?>
        </li>
    </ul>
    <br>
    <?php endforeach ?>
    
</body>
</html>