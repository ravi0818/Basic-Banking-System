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
		<div class="row align-self-center">
			<div class="col-lg-3 shadow-lg p-2">
				<div>
					<img src="images/users.png" class="img-thumbnail w-100" alt="" />
				</div>
				<a href="all_user.php" class="btn btn-primary btn-lg p-3 w-100">View All Users</a>
			</div>
			<div class="col-lg-3 shadow-lg mx-auto p-2">
				<div>
					<img src="images/moneyTransfer.png" class="img-thumbnail w-100" alt="" />
				</div>
				<a href="make_transaction.php" class="btn btn-primary btn-lg p-3 w-100">Transfer Money</a>
			</div>
			<div class="col-lg-3 shadow-lg p-2">
				<div>
					<img src="images/transferHistory.png" class="img-thumbnail w-100" alt="" />
				</div>
				<a href="transaction_history.php" class="btn btn-primary btn-lg p-3 w-100">Transaction History</a>
			</div>
		</div>
	</div>

	<div class="m-4 p-4"></div>

	<?php include "snippet/footerbar.php"?>
</body>

</html>