<?php

$conn = mysqli_connect('localhost', 'root', '', 'koletars');

$query = "SELECT * FROM artikli WHERE kategorija='basta'";

$result = mysqli_query($conn, $query);

$basta = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($basta);

?>