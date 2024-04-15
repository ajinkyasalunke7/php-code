<?php
$conn = mysqli_connect("localhost", "root", "tiger");
if (!$conn) {
    die("COnnection failed: " . mysqli_connect_errno());
}
$query = 'CREATE DATABASE practical';

$res = mysqli_query($conn, $query);
echo "Database created";
