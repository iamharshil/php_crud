<?php 
include './db.php';
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];

$sql = "insert into userdata (name, email, mobile, password) values ('$name', '$email','$mobile', '$password')";

$conn->query($sql);
$conn->close();
header("location: index.php");
?>