<?php
include './db.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CRUD</title>

    <style>
      table,tr,td {border: 1px solid black;"},

    </style>
  </head>
  <body>
<div>
<table>
    <thead>
        <tr>
            <th>ID No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Password</th>
            <th>Passsword</th>
        </tr>

      <tbody>
          <?php
          $sql = "select * from userdata";
          $result = mysqli_query($conn, $sql);
          if ($result) {
              while($row = mysqli_fetch_assoc($result)) {
                  $id = $row['id'];   
                  $name = $row['name'];
                  $email = $row['email']; 
                  $mobile = $row['mobile'];
                  $password = $row['password'];


                  echo '<tr>
                  <th>'.$id.'</th>
                  <td>'.$name.'</td>
                  <td>'.$email.'</td>
                  <td>'.$mobile.'</td>
                  <td>'.$password.'</td>

                  <td>
                  <button><a href="update.php?updateid='.$id.'">Update</a></button>
                  <button><a href="delete.php?deleteid='.$id.'">Delete</a></button>
                  </td>
                  </tr>';
              }
          }
          ?>
          
      </tbody>

    </thead>
</table>


  <!-- <table class="table">
    <tbody>
      <?php// include 'read.php' ?>
    </tbody>
  </table> -->

<form method="post" action="create.php">
  
  <div>
    <label for="name">Name</label>
    <input type="text" name="name" autocomplete="off">
  </div>

  <div>
    <label for="email">Email</label>
    <input type="email" name="email" autocomplete="off">
  </div>

  <div>
    <label for="mobile">Mobile</label>
    <input type="text" name="mobile" autocomplete="off">
  </div>

  <div>
    <label for="password">Password</label>
    <input type="password" name="password" autocomplete="off">
  </div>

  <button type="submit" name="submit">Submit</button>
</form>
</div>

</body>
</html>