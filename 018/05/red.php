<?php
if ('GET' == $_SERVER['REQUEST_METHOD']) {
    $redir = $_GET['redir'] ?? 2;
    if ($redir == 1) {
        header("Location: http://localhost/PHP_lessons/018/05/blue.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
</head>
<body style="background:crimson">
<div class="two-links">
<a href="http://localhost/PHP-lessons/018/05/red.php?redir=1" method="get">CLICK ME</a>
</div>
</body>
</html>