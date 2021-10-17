<?php
require_once("model/database_connect.php");
$db = new DB();
if(!empty($_POST["id_categorie"])) {
	$query ="SELECT * FROM repas WHERE id_categorie = '" . $_POST["id_categorie"] . "'";
	$results = $db->runQuery($query);
?>
	<option value="">Sélectionnez le plat</option>
<?php
	foreach($results as $repas) {
?>
	<option value="<?php echo $repas["id"]; ?>"><?php echo $repas["nom_repas"]; ?></option>
<?php
	}
}
?>