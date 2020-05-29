<?php

$conn = mysqli_connect('localhost', 'root', '', 'koletars');

$query = "SELECT * FROM artikli WHERE kategorija='hemija'";

$result = mysqli_query($conn, $query);

$hemija = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($hemija);

?>