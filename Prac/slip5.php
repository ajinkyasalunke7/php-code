<?php
$conn = mysqli_connect("localhost", "root", "tiger", "practical");
if (!$conn) {
    die("COnnection failed: " . mysqli_connect_error());
}
$query = 'SELECT * FROM student_info';
$ress = mysqli_query($conn, $query);
// print_r($ress);
// echo "<br />";
$res = mysqli_num_rows($ress);
// print_r($res);
// echo "<br />";
if ($res > 0) {
    while ($row = mysqli_fetch_assoc($ress)) {
        echo "Roll No: " . $row['roll_no'] . "<br>";
        echo "Name: " . $row['name'] . "<br>";
        echo "City: " . $row['city'] . "<br>";
        echo "Mobile No: " . $row['mobile_no'] . "<br> <br>";
    }
}
