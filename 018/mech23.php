<?php

function doColor()
{
    if (!isset($_GET['color'])) {
        return 'black';
    }
    $color = $_GET['color'];
   
    if (preg_match('/\#[0-9A-F]{6}/i', $color)) {
        return $color;
    }
    if (preg_match('/[0-9A-F]{6}|[0-9A-F]{3}/i', $color)) {
        return '#'.$color;
    }
    return $color;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>mech 23</title>
</head>
<body style="background:<?= doColor() ?>">
    <div class="two-links">
    <a href="http://localhost/PHP_lessons/018/mech23.php">Be nieko</a>
    </div>
    <div class="two-links">
        <form action="http://localhost/PHP_lessons/018/mech23.php" method="get">
        <input type="color" name="color"/>
        <button type="submit">Keiciam!</button>
    </div>
</body>
</html>