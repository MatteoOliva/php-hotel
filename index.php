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
        <table>
            <tbody>
            <tr><th>nome: <?= $hotel['name']?></th></tr>
            <tr><th>Descrizione: <?= $hotel['description']?></th></t>
            <tr><th>parcheggio: <?= $hotel['parking']?></th></tr>
            <tr><th>voto: <?= $hotel['vote']?></th></tr>
            <tr><th>distanza dal centro: <?= $hotel['distance_to_center']?></th></tr>
            </tbody>
        </table>
    <br>
    <?php endforeach ?>
    
</body>
</html>
