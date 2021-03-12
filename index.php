<?php include 'db.php';  ?>

<DOCTYPE! html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
<title></title>
</head>
<body>
  <h1>Users inside the database</h1><hr>
  <?php
    $sql = "SELECT * FROM users;";
    $result = mysqli_query( $connect, $sql);
    $rowCheck = mysqli_num_rows($result);

    if ($rowCheck > 0){
        while ($rows = mysqli_fetch_assoc($result)) {
          echo $rows['name'].'<br>';
        }
    }else {
      echo "No data found";
    }
   ?>
</body>
</html>
