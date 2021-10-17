<?php
    include_once("../model/Repas.php");
    $myres = new Repas();
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
								<th class="column100 column2" data-column="column2">id repas</th>
								<th class="column100 column3" data-column="column3">nom repas</th>
								<th class="column100 column4" data-column="column4">prix</th>
								<th class="column100 column5" data-column="column5">id categorie</th>
								
							</tr>
						</thead>
						<tbody>
							<tr class="row100">
								<?php
								foreach ($res as $row) {
									// OR while($row = $res->fetch())
									$id = $row["id"];
									$nom_repas = $row["nom_repas"];
									$prix = $row["prix"];
									$id_categorie = $row["id_categorie"];
									
									echo "id_categorie
									<tr>
									<td class='column100 column2' data-column='column2'>$id</td>

									  <td class='column100 column3' data-column='column3'>$nom_repas</td>
									  <td class='column100 column4' data-column='column4'>$prix</td>
									  <td class='column100 column5' data-column='column5'>$id_categorie</td>
									  nom_repas
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
	<script src="tablecss/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="tablecss/vendor/bootstrap/js/popper.js"></script>
	<script src="tablecss/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="tablecss/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="tablecss/js/main.js"></script>

</body>
</html>