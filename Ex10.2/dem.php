<?php
    session_start();
    $_SESSION['count'] = !isset($_SESSION['count']) ? 1 : $_SESSION['count']+1;
?>
<?php
    echo $_SESSION['count'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href ="tang.php"> Next</a>
</body>
</html>