<?php require_once "array.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach ($hotels as $hotel[$index]);?>
    <ul>
        <li><?php $hotel[$index]?></li>
    </ul>
</body>
</html>