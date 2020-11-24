<?php
include("connection.php");

$data = file_get_contents("php://input");
$mydata = json_decode($data, true);

$message = $mydata['message'];
$sender = $mydata['sender'];

if (!empty($message) && !empty($sender)) {
    $sql = "INSERT INTO messages(`message`, `sender`) VALUES ('$message','$sender')";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        echo "Sent";
    } else {
        echo "Error";
    }
} else {
    echo "fill all details";
}
