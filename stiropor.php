<?php

$conn = mysqli_connect('localhost', 'root', '', 'koletars');

$query = "SELECT * FROM artikli WHERE kategorija='stiropor'";

$result = mysqli_query($conn, $query);

$stiropor = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($stiropor);

?>