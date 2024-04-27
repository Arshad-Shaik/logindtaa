<?php
$conn = new mysqli("localhost","root", "", "loginformdata");
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error); 
?>