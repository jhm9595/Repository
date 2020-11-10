<?php
$conn = mysqli_connect('localhost', 'root', '', 'o2');
$result = mysqli_query($conn, 'SELECT * FROM topic WHERE id=1');
$row = mysqli_fetch_assoc($result);
var_dump($row['title']);
?>
