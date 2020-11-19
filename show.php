<html>
<head>
<title>ITF Lab Show information</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
body {
  background-color:black;
}
</style>
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'peak-555.mysql.database.azure.com', 'SilverShade@peak-555', 'Peak0307', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
<center>
<table class="table table-hover table-bordered table-center" style="width:800px">
  <tr class="table-primary" >
    <th>Name</th>
    <th>Comment</th>
    <th>Link</th>
  </tr>
<center\>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr class="table-primary">
    <td><?php echo $Result['Name'];?></div></td>
    <td><?php echo $Result['Comment'];?></td>
    <td><?php echo $Result['Link'];?></td>
  </tr>
<?php
}
?>
</table>
<?php
mysqli_close($conn);
?>
<a href="https://gobeyondglobal.azurewebsites.net/form.html" class="btn btn-success">INSERT</a>
<a href="https://gobeyondglobal.azurewebsites.net/form_edit.html" class="btn btn-warning">EDIT</a>
<a href="https://gobeyondglobal.azurewebsites.net/form_delete.html" class="btn btn-danger">REMOVE</a>
</body>
</html>
