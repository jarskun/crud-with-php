<?php
$mysqli = new mysqli("localhost", "root", "", "biodata");
if ($mysqli->connect_error) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
}
?>
