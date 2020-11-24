<?php
include("connection.php");

$sql = "SELECT * FROM messages";
$res = mysqli_query($conn, $sql);
$data = array();
while ($row = $res->fetch_assoc()) {
    $data[] = $row;
}
echo json_encode($data);
