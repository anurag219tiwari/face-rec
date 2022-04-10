<?php
/**
 * mysql_connect is deprecated
 * using mysqli_connect instead
 */

$databaseHost = 'localhost';
$databaseName = 'public';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, 
$databaseUsername, $databasePassword, $databaseName); 

if(isset($_POST["pid"])){
	$id = $_POST["pid"];
}

$sql = "SELECT * FROM face where id = '$id'";

$directory = "./images/";
if ($result = $mysqli->query($sql)) {
    while($row = $result->fetch_assoc()){ 
        $field1name = $row["name"];
        $field2name = $row["age"];
        $field3name = $row["gender"];
        $field4name = $row["address"];
        $field5name = $row['blood'];
        $field6name = $row['phone'];
        $field7name = $row['econtact'];
        $field8name = $row['medical'];
    //$result->free();
}
}


?>
<!DOCTYPE html>
<html lang="en">
<head>	
	<title>Table V04</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110">
					<div class="table100-head">
						<table>
							<thead>
								<tr class="row100 head">
									<th class="cell100 column1">Name</th>
									<th class="cell100 column2">Age</th>
									<th class="cell100 column3">Gender</th>
									<th class="cell100 column4">Address</th>
									<th class="cell100 column5">Blood Group</th>
									<th class="cell100 column6">Emergency Contact</th>
									<th class="cell100 column7">Phone</th>
									<th class="cell100 column8">Past Medical History</th>
								</tr>
							</thead>
						</table>
					</div>

					<div class="table100-body js-pscroll">
						<table>
							<tbody>
								<tr class="row100 body">
									<td class="cell100 column1"><?php echo $field1name ?></td>
									<td class="cell100 column2"><?php echo $field2name ?></td>
									<td class="cell100 column3"><?php echo $field3name ?></td>
									<td class="cell100 column4"><?php echo $field4name ?></td>
									<td class="cell100 column5"><?php echo $field5name ?></td>
									<td class="cell100 column6"><?php echo $field6name ?></td>
									<td class="cell100 column7"><?php echo $field7name ?></td>
									<td class="cell100 column8"><?php echo $field8name ?></td>
								</tr>

								
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
