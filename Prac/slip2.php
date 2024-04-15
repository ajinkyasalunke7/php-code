<?php
$conn = mysqli_connect("localhost", "root", "tiger", "practical");
if (!$conn) {
    die("COnnection failed: " . mysqli_connect_errno());
}
$query = 'UPDATE MyGuest SET firstname = "Ajinkya", lastname = "Salunke" WHERE id=1';

$res = mysqli_query($conn, $query);
echo "Updated";
