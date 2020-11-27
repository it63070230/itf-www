<!DOCTYPE html>
<html>
<head>
	<title>Database</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
	<style type="text/css">
		.card {
			border-top: solid 5px #6633CC;
		}
	</style>
</head>
<body class="bg-light py-5">
	<div class="container text-dark">
		<div class="row">
			<div class="col-12 col-lg-8 offset-lg-2">
				<div class="card shadow">
					<div class="card-body">
						<div class="row">
							<div class="col-6"><h1 class="text-monospace">DataBase By Phatcharapon Sasawattecha 63070115</h1></div>
							<div class="col-6 text-right"><a href="form.html" class="btn btn-warning btn-sm font-weight-bold">ADD</a></div>
						</div>
						<div class="table-responsive">
							<?php
								$conn = mysqli_init();
								mysqli_real_connect($conn, 'itflabexam.mysql.database.azure.com', 'baspop01@itflabexam', 'Phatcharapon123', 'itflab', 3306);
								if (mysqli_connect_errno($conn))
								{
								    die('Failed to connect to MySQL: '.mysqli_connect_error());
								}
								$res = mysqli_query($conn, 'SELECT * FROM guestbooks');
							?>
							<table class="table table-borderless table-hover">
								<thead>
									<tr>
										<th width="150px">Action</th>
										<th>ชื่อสินค้า</th>
										<th>ราคาต่อหน่วย</th>
                                        <th>จำนวน</th>
                                        <th>ราคาทั้งหมด</th>
									</tr>
								</thead>
								<tbody>
									<?php
										while($Result = mysqli_fetch_array($res)) {
									?>
									<tr>
										<td><a href="delete.php?Id=<?php echo $Result['Id'];?>" class="btn btn-sm btn-danger mb-2 mb-md-0">DELETE</a>
										<td><?php echo $Result['Product'];?></td>
										<td><?php echo $Result['Price'];?></td>
                                        <td><?php echo $Result['Amount'];?></td>
                                        <td><?php echo $Result['Total'];?></td>
									</tr>
									<?php
										}
									?>
								</tbody>
							</table>
							<?php
								mysqli_close($conn);
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
