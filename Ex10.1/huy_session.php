<?php
    session_start();
    unset($_SESSION['name']);
    // session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Session</title>
</head>
<body>
    <?php echo "Chào bạn ".$_SESSION['name']." ".$_SESSION['age']." Tuổi"; ?><br>
</body>
</html>