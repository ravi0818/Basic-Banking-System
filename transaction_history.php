<!DOCTYPE html>
<html>

<head>
	<title></title>
	<?php include 'snippet/links.php' ?>
</head>

<body>
	<?php include 'snippet/navbar.php' ?>
	<div class="p-5"></div>
	<?php include 'snippet/config.php' ?>
	<div class="container">
		<div class="row">
			<div class="col mx-auto shadow-lg p-4 mb-4 bg-white">
				<h2 class="text-center">Transaction History</h2>
				<?php include 'snippet/config.php' ?>
				<?php
				$sql = "SELECT * FROM transaction_history_db";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
					// output data of each row
					echo "<div class='container'><table class ='table table-striped'>";
					echo "<tr>
					<th>From Account</th>
					<th>To Account</th>
					<th>Amount</th>
					<th>Date Time</th>
					</tr>";
					while($rows=mysqli_fetch_assoc($result)) { ?>
				<tr>
					<td>
						<?php echo $rows['from_ac'] ?>
					</td>
					<td>
						<?php echo $rows['to_ac']?>
					</td>
					<td>
						<?php echo $rows['amount']?>
					</td>
					<td>
						<?php echo $rows['datetime']?>
					</td>
				</tr>
				<?php }
					echo "</table></div>";
				} else { echo "0 results"; }
				?>
			</div>
		</div>
	</div>

	<div class="m-4 p-4"></div>

	<?php include "snippet/footerbar.php"?>
</body>

</html>