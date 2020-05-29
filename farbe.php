<?php

$conn = mysqli_connect('localhost', 'root', '', 'koletars');

$query = "SELECT * FROM artikli WHERE kategorija='farbe'";

$result = mysqli_query($conn, $query);

$farbe = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($farbe);

?>