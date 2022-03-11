


<?php/*
include './db.php';
// read data

$sql = "select * from userdata";
$show = mysql_query($conn, $sql);
// $show = $conn->query($sql);
while (isset($show)){
  // while($row = $show->fetch_assoc()) {    
    // if for update data and else for read and show data.
    // if(isset($_GET['id']) && $row['id'] == $_GET['id']) { 
    //   echo '<form action="update.php" method="post">';
    //   echo '<td><input type="text" name="name" value="'.$row['name'].'"></td>';
    //   echo '<td><input type="email" name="email" value="'.$row['email'].'"></td>';
    //   echo '<td><input type="text" name="mobile" value="'.$row['mobile'].'"></td>';
    //   echo '<td><input type="password" name="password" value="'.$row['password'].'"></td>';
    //   echo '<td><button type="submit" name="id"></button></td>';
    //   echo '<input type="hidden" name="id" value="'.$row['id'].'">';
    //   echo '</form>';
    //   }
    // else {
    // for showing read data
    echo '<table>';
    echo '<tr>';
    echo '<td>'. $row['id'] . '</td>';
    echo '<td>'. $row['name'] . '</td>';
    echo '<td>' . $row['email'] . '</td>';
    echo '<td>' . $row['mobile'] .'</td>';

    //for update i made update and delete button
    echo '<td><a href="index.php"?id="'.$row['id'].'" role="button">Update</a></td>';
    echo '<td><a href="delete.php"?id="'.$row['id'].'" role="button">Delete</a></td>';

    echo '</tr>';
    echo '<table>';
    // }
  }
// $conn->close();
  */?>