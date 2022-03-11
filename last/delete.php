<?php
include "./db.php";

if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];
    $sql = "delete from userdata where id=$id";
    
    if ($conn->query($sql)) {
        header('location: index.php');
    } else {
        die(mysql_error($conn));
    }
}
// $id = (isset($_POST['id']) ? $_POST['id'] : '');
// $sql= "delete from userdata where id=$id";
// $conn->query($sql);
// $conn->close();
// header("location: index.php");
?>