<?php
header("Content-Type: application/json");

$response = array_fill(0, 10, "Data");
echo json_encode(['message' => $response]);
?>
