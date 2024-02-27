<?php require_once "array.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>

        <thead>
            <tr>
                <th>nome hotel </th>
                <th>descrizione</th>
                <th>parcheggio</th>
                <th>voto</th>
                <th> distanza dal centro</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($hotels as $hotel): ?>
                <tr>
                    <td>
                        <?= $hotel['name'] ?>
                    </td>

                    <td>
                        <?= $hotel['description'] ?>
                    </td>

                    <td>
                        <?= $hotel['parking'] ? 'Si' : 'No'?>
                    </td>

                    <td>
                        <?= $hotel['vote'] ?>
                    </td>

                    <td>
                        <?= $hotel['distance_to_center'] ?> km
                    </td>
                </tr>

            <?php endforeach; ?>
        </tbody>

    </table>

</body>

</html>
<style>
    table {
        border: 5px solid grey;
        text-align: center;
        padding: 5px;
        background-color: cyan;
        margin: auto;
    }

    th {
        border: 1px solid red;
        padding: 7px;
        border-radius: 9px;
        background-color: white;
    }

    td {
        border: 1px solid blue;
        border-radius: 9px;
        background-color: white;
    }
</style>