<?php
$conn = mysqli_connect("localhost", "root", "saket1234", "laplist_db");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}