<!DOCTYPE html>
<html>

<head>
	<title></title>
	<?php include 'snippet/links.php' ?>
</head>

<body>
	<?php include 'snippet/navbar.php' ?>
	<div class="p-5"></div>
	<div class="container">
		<div class="row">
			<div class="col mx-auto shadow-lg p-4 mb-4 bg-white">
				<h2 class="text-center">All Users</h2>
				<?php include 'snippet/config.php' ?>
				<?php
				$sql = "SELECT * FROM user_info_db";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {?>
					<div class='container'><table class ='table table-striped'>
					<tr>
					<th>Account Number</th>
					<th>Name</th>
					<th>Phone</th>
					<!-- <th>Address</th>
					<th>Balance</th> -->
					<th>Details/Transfer</th>
					</tr>
					<?php while($rows=mysqli_fetch_assoc($result)) { ?>
				<tr>
					<td>
						<?php echo $rows['ac_num'] ?>
					</td>
					<td>
						<?php echo $rows['name']?>
					</td>
					<td>
						<?php echo $rows['balance']?>
					</td>
					<td><a href="singleuser.php?id= <?php echo $rows['ac_num'] ;?>">
							<button type="button" class="btn btn-secondary">Show Details/Transfer</button>
						</a></td>
				</tr>
				<?php }
					echo "</table></div>";
				} 
				else { echo "0 results"; }
				?>
			</div>
		</div>
	</div>

	<div class="m-4 p-4"></div>

	<?php include "snippet/footerbar.php"?>
</body>

</html>