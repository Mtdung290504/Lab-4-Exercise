<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 11</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    $conn = mysqli_connect("127.0.0.1:3307", "root", "", "phantrang");
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    $limit = 5; // 5 title per page
    $start = ($page - 1) * $limit;
    $total_title = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tintuc"));
    $total_page = ceil($total_title/$limit);
    $query = "SELECT * FROM tintuc LIMIT ".$start.", ".$limit;
    $result = mysqli_query($conn, $query);
    echo "<div class=\"title\">";
    while($row = mysqli_fetch_array($result)){
        echo '<a href="#">'.$row['id'].'. '.$row['title'].'</a><br />';
    }
    echo "</div>";
    echo "<div class=\"pagination\">";
        for($i = 1; $i <= $total_page; $i++){
        echo '<a href="?page='.$i.'">'.$i.'</a> | ';
    }
    echo "</div>";
?>
</body>
</html>