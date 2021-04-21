<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require './libs/content.php'; ?>

    <?= whoAreYou() ?>

    <?php

    $whatsForDinner = giveMeSomeFood();

    foreach ($whatsForDinner as $dinner) {
        ?><div><?= $dinner['kind'] ?><div><?php
    }

    ?>
</body>
</html>