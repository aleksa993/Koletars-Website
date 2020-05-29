<?php

$conn = mysqli_connect('localhost', 'root', '', 'koletars');

$query = "SELECT * FROM artikli WHERE kategorija='alat'";

$result = mysqli_query($conn, $query);

$alati = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($alati);

?>