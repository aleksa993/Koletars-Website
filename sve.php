<?php

$conn = mysqli_connect('localhost', 'root', '', 'koletars');

$query = "SELECT * FROM artikli";

$result = mysqli_query($conn, $query);

$sve = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($sve);

?>