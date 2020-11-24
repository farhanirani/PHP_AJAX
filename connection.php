<?php

$conn = mysqli_connect('localhost', 'root', '', 'ajax_messaging');
if (!$conn) {
    die("connection failed");
}
