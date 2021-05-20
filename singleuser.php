<?php
include 'snippet/config.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$to_name=$_POST["tName"];
	$from_acc=$_GET['id'];
	$tr_amount=$_POST['tAmount'];
	$date = date('Y-m-d H:i:s');

	$sql = "SELECT * from user_info_db where ac_num=$from_acc";
    $query = mysqli_query($conn,$sql);
    $sql1 = mysqli_fetch_array($query); 
	$from_name=$sql1['name'];


	if($tr_amount<=0) echo '<script>alert("Amount should be greater than 0")</script>';

	else if($tr_amount>$sql1['balance']) echo '<script>alert("Insufficient balance")</script>';

	else{
		$sql="UPDATE user_info_db SET balance=balance-{$tr_amount} WHERE ac_num='$from_acc';";
		$sql.="UPDATE user_info_db SET balance=balance+{$tr_amount} WHERE name='$to_name';";
		$sql.="INSERT INTO transaction_history_db (id, from_ac, to_ac, amount, datetime)
		VALUES ('', '$from_name', '$to_name', $tr_amount, '$date')";
		if ($conn->multi_query($sql) === TRUE) {
			echo '<script>alert("Transfer Successful");
			window.location.href="transaction_history.php";
			</script>';
			//header("location:transaction_history.php");
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
		// header("location: transaction_history.php");
	}
}

?>
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
				<h2 class="text-center">Users Details</h2>
				<?php
				include 'snippet/config.php';
                $uid=$_GET['id'];
                $sql = "SELECT * FROM  user_info_db where ac_num=$uid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                echo "Error : ".$sql."<br>".mysqli_error($conn);
                }
                $rows=mysqli_fetch_assoc($result);?>
				<div class='container'>
					<table class='table table-striped'>
						<tr>
							<th>Account Number</th>
							<th>Name</th>
							<th>Phone</th>
							<th>Email</th>
							<th>PAN</th>
							<th>Address</th>
							<th>Balance</th>
							<!-- <th>Details</th> -->
						</tr>
						<tr>
							<td>
								<?php echo $rows['ac_num'] ?>
							</td>
							<td>
								<?php echo $rows['name']?>
							</td>
							<td>
								<?php echo $rows['phone']?>
							</td>
							<td>
								<?php echo $rows['email']?>
							</td>
							<td>
								<?php echo $rows['pan']?>
							</td>
							<td>
								<?php echo $rows['address']?>
							</td>
							<td>
								<?php echo $rows['balance']?>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 mx-auto shadow-lg p-4 mb-4 bg-white">
				<h2 class="text-center">Transfer Money</h2>
				<?php include 'snippet/config.php' ?>
				<form action="" method="POST">
					<div class="form-group">
						<label for="tName">Select Name:</label>
						<select name="tName" class="form-control">
							<option value="" disabled selected>Choose</option>
							<?php
								$uid=$_GET['id'];
								$sql = "SELECT * FROM user_info_db where ac_num!=$uid";
								$result=mysqli_query($conn,$sql);
								if(!$result)
								{
									echo "Error ".$sql."<br>".mysqli_error($conn);
								}
								while($rows = mysqli_fetch_assoc($result)) {
							?>
							<option class="table" value="<?php echo $rows['name'];?>">
								<?php echo $rows['name'] ;?> (Account No.:
								<?php echo $rows['ac_num'] ;?> )
							</option>
							<?php 
							} ?>
						</select>
						<br>
						<div class="form-group">
							<label for="tAmount">Amount:</label>
							<input type="text" class="form-control" placeholder="Enter Amount" name="tAmount">
						</div>
						<div class="col text-center">
							<button type="submit" class="btn btn-success">Transfer</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	</div>

	<div class="m-4 p-4"></div>

	<?php include "snippet/footerbar.php"?>
</body>

</html>