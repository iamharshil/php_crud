<?php
include './db.php';
$id = $_GET['updateid'];
$sql = "select * from userdata";
$result = $conn->query($sql); //mysql_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobile'];
$password = $row['password'];

if(isset($_POST['submit'])) {
    $name = $_GET['name'];
    $email = $_GET['email'];
    $mobile = $_GET['mobile'];
    $password = $_GET['password'];

    $sql = "update userdata set id=$id,name='$name' email='$email' mobile='$mobile' password='$password' where id=$id";
    $result = mysqli_query($conn, $sql);

    if($result) {
        // echo "Data inserted";
        header('location: display.php');

    } else {
        die(mysqli_error($conn));
    }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>
  <body>
    <div>
        <form method="POST">
            <div>
                <label>Name:</label>
                <input type="text" name="name" value="<?php echo $name; ?>">
            </div>

            <div>
                <label>Email:</label>
                <input type="email" name="email" value="<?php echo $email;?>">
            </div>

            <div>
                <label>Mobile:</label>
                <input type="text" name="mobile" value="<?php echo $mobile;?>">
            </div>

            <div>
                <label>Password:</label>
                <input type="text" name="password" value="<?php echo $password;?>">
            </div>

            <button type="submit" name="submit">Update</button>
        </form>
    </div>
  </body>
</html>


<!-- <?php
// include './db.php';
// $id = $_POST['id'];
// $name = $_POST['name'];
// $score = $_POST['score'];
// $sql = "update usserdata set name='$name', score='$score' where id=$id";
// $result = $conn->query($sql);
// $conn->close();
// header("location: index.php");
?> -->