<?php
include("connection.php");

$data = file_get_contents("php://input");
$mydata = json_decode($data, true);

$sql = "DELETE FROM messages WHERE m_id = $mydata";
$res = mysqli_query($conn, $sql);

if ($res) {
    echo "Success";
} else {
    echo "Error";
}
