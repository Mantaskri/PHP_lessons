<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body style ="background:<?= isset($_GET['color']) ? 'yellow' : 'black' ?>">
    <div class="two-links">
    <a href="http://localhost/PHP_lessons/018/mech1.php">Be nieko</a>
    <a href="http://localhost/PHP_lessons/018/mech1.php?color=1">Su</a>
    </div>
</body>
</html>