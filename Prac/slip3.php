<?php
$conn = mysqli_connect("localhost", "root", "tiger", "practical");
if (!$conn) {
    die("COnnection failed: " . mysqli_connect_errno());
}
$query = 'INSERT into `student_info` (`roll_no`,`name`,`city`,`mobile_no`) VALUES (94,"Saii Row","Milan","00000000")';

$res = mysqli_query($conn, $query);
echo "Inserted";
