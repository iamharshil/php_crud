<?php
$conn = new mysqli('localhost', 'root', '', 'last');

if (!$conn) {
    die(mysql_error($conn));
}
// if ($conn){
// 	echo "Connection Successful";
// } else {
// 	die(mysql_error($conn));
// }

// upper code to check if it's working and now this code for checking error
// if (!$conn) {
// 	die(mysql_error($conn));
// }
?>