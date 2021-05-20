<?php
include "config.php";


$sql = "INSERT INTO user_info_db (ac_num, name, phone, email, address, pan, balance)
VALUES ('80001', 'Mario Speedwagon', '9756732875', 'mario@email.com', '3922  Blackwell Street', 'BAJPC4350M', '40000.00');";

$sql .= "INSERT INTO user_info_db (ac_num, name, phone, email, address, pan, balance)
VALUES ('', 'Petey Cruiser', '9656268522', 'petey@email.com','3764  Angie Drive', 'DAJPC4150P','40000.00');";

$sql .= "INSERT INTO user_info_db (ac_num, name, phone, email, address, pan, balance)
VALUES ('', 'Garrett Walker', '9677568370', 'garrett@email.com','2699  Apple Lane', 'XGZFE7225A','40000.00');";

$sql .= "INSERT INTO user_info_db (ac_num, name, phone, email, address, pan, balance)
VALUES ('', 'Paul Molive', '9964369183', 'paul@email.com','813  Lynn Avenue', 'CTUGE1616I','40000.00');";

$sql .= "INSERT INTO user_info_db (ac_num, name, phone, email, address, pan, balance)
VALUES ('', 'Anna Mull', '9642487173', 'anna@email.com','3237  Kelly Street', 'PEVFV4506Y','40000.00');";

$sql .= "INSERT INTO user_info_db (ac_num, name, phone, email, address, pan, balance)
VALUES ('', 'Gail Forcewind', '9564543573', 'gail@email.com','3732  Cinnamon Lane', 'UWPCL6780T','40000.00');";

$sql .= "INSERT INTO user_info_db (ac_num, name, phone, email, address, pan, balance)
VALUES ('', 'Paige Turner', '9236263873', 'paige@email.com','766  Patterson Road', 'BAJPC4350M','40000.00');";

$sql .= "INSERT INTO user_info_db (ac_num, name, phone, email, address, pan, balance)
VALUES ('', 'Bob Frapples', '9752324353', 'bob@email.com','4573  Oak Way', 'LQDTD5444T','40000.00');";

$sql .= "INSERT INTO user_info_db (ac_num, name, phone, email, address, pan, balance)
VALUES ('', 'Nick R. Bocker', '9242235233', 'nick@email.com','1494  Maxwell Farm Road', 'YUGFJ2046V','40000.00');";

$sql .= "INSERT INTO user_info_db (ac_num, name, phone, email, address, pan, balance)
VALUES ('', 'Marvin Gardens', '9668424622', 'marvin@email.com','2741  Blue Spruce Lane', 'NLXBC1905E','40000.00')";


if ($conn->multi_query($sql) === TRUE) {
	echo "New record created successfully<br>";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

?>