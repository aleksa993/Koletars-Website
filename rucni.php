<?php

$conn = mysqli_connect('localhost', 'root', '', 'koletars');

$query = "SELECT * FROM artikli WHERE kategorija='rucni'";

$result = mysqli_query($conn, $query);

$rucni = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($rucni);

?>