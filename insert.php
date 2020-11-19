<html>
<head>
<title>ITF Lab insert</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  p.ex1 {
    margin-top: 25px;
  }
  </style>
</head>
<body>
<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'tanadon.mysql.database.azure.com', 'tanadonparosin@tanadon', 'Nexus404', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$name = $_POST['name'];
$comment = $_POST['comment'];
$link = $_POST['link'];


$sql = "INSERT INTO guestbook (Name , Comment , Link) VALUES ('$name', '$comment', '$link')";


if (mysqli_query($conn, $sql)) {
  
    echo "<center>New record created successfully</center>";
  } else {
    echo "<center>Error:</center> " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>

<div class="container">
  <center><a href="show.php"><input type="button" value="Show" class="btn btn-info" class="ex1"></a></center>
</div>
</body>
</html>
