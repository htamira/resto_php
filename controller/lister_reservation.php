<?php
    include_once("../model/reservation.php");
    $myres = new reservation();
    $res = $myres->selectAll();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V03</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../tablecss/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../tablecss/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../tablecss/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../tablecss/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../tablecss/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../tablecss/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../tablecss/css/util.css">
	<link rel="stylesheet" type="text/css" href="../tablecss/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				
				
				<div class="table100 ver6 m-b-110">
					<table data-vertable="ver6">
						<thead>
							<tr class="row100 head">
							<th class="column100 column1" data-column="column2"> id reservation</th>

								<th class="column100 column2" data-column="column2"> name  </th>
								<th class="column100 column3" data-column="column3">cin</th>
								<th class="column100 column4" data-column="column4">date</th>
								<th class="column100 column5" data-column="column5">time</th>
								<th class="column100 column6" data-column="column6">phone</th>
								<th class="column100 column7" data-column="column7">email</th>
								<th class="column100 column8" data-column="column8">person</th>

                                <th class="column100 column9" data-column="column9">plat</th>
                                <th class="column100 column10" data-column="column10">notes</th>
							</tr>
						</thead>
						<tbody>
							<tr class="row100">
								<?php
								foreach ($res as $row) {
									// OR while($row = $res->fetch())
									$id_reservation=$row["id_reservation"];
									$name = $row["name"];
									$cin = $row["cin"];
									$date = $row["date"];
									$time = $row["time"];
									$phone = $row["phone"];
									$email= $row["email"];
									$person=$row["person"];
									$plat= $row["plat"];
									$message=$row["message"];
									echo "
									<tr>
									<td class='column100 column1' data-column='column1'>$id_reservation</td>

                                      <td class='column100 column2' data-column='column2'>$name</td>
									  <td class='column100 column3' data-column='column3'>$cin</td>
									  <td class='column100 column4' data-column='column4'>$date</td>
									  <td class='column100 column5' data-column='column5'>$time</td>
									  <td class='column100 column6' data-column='column6'>$phone</td>
									  <td class='column100 column7' data-column='column7'>$email</td>
									  <td class='column100 column8' data-column='column8'>$person</td>
									  <td class='column100 column9' data-column='column19'>$plat</td>
									  <td class='column100 column10' data-column='column10'>$message</td>
									</tr>
									";
								}
							   
							?>
							</tr>

						
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>


	

<!--===============================================================================================-->	
	<script src="../tablecss/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../tablecss/vendor/bootstrap/js/popper.js"></script>
	<script src="../tablecss/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../tablecss/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../tablecss/js/main.js"></script>

</body>
</html>