<?php
    $conn = mysqli_connect('localhost', 'root', '', 'koletars');

    $query = "SELECT * FROM artikli WHERE akcija=1";

    $result = mysqli_query($conn, $query);

    $akcija = mysqli_fetch_all($result, MYSQLI_ASSOC);

    echo json_encode($akcija);
?>