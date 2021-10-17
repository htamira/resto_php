<?php
    include_once("../model/connection.php");
    class Repas extends Connection{
        private  $nom_repas, $id_repas, $prix, $categorie;
    
     function __construct($nom_repas= "", $prix = "", $categorie = "") {
       // $this->id_repas = $id_repas;
        $this->nom_repas = $nom_repas;
        $this->prix=$prix;
        $this->id_categorie=$categorie;       
        parent::__construct();
    }

        // Add
        function ajout_repas($nom_repas,$prix,$id_categorie) {
        if ($this->pdo == null) 
        {
            echo "<br><br>PDO is null: <br>Repas->ajout_repas()";
            return;
        }           
        
        $query = "INSERT INTO `Repas`( `nom_repas`, `prix`, `id_categorie`) VALUES ( ?, ?, ?)";
        try {
            $statement = $this->pdo->prepare($query);
            $res = $statement->execute(array($nom_repas,$prix,$id_categorie));
            if ($res) {
                echo "Successfully added repas";
            } 
            else {
                echo "Failed to insert";
                var_dump(http_response_code(500));
            }
        } 
        catch (PDOException $e) {
            $msg = $e->getMessage();
            echo $msg;
        }
        }


        function delete_repas($id_repas) {
            if ($this->pdo == null) {
                echo "<br><br>PDO is null: <br>Repas->delete_repas()
                <input type = 'button' value = 'Retour!'  onclick = 'history.back()' > ";
                return;
            }
            $query = "DELETE FROM `repas` WHERE id=?";
            try {
                $statement = $this->pdo->prepare($query);
                $res = $statement->execute(array($id_repas));
                if ($res) {
                    echo " <b style='text_align='center';'>Successfully deleted repas</b>
                    <input type = 'button' value = 'Retour!'  onclick = 'history.back()' >";
                } else {
                    echo "<b style='text_align='center';'>Failed to delete</b>";
                    var_dump(http_response_code(500));
                }
            } catch (PDOException $e) {
                $msg = $e->getMessage();
                echo $msg;
            }
        }



        // Select
        function selectAll() {
            if ($this->pdo == null) {
                echo "<br><br>PDO is null: <br>Repas->selectAll()";
                return;
            }
            $query = "SELECT * FROM `repas`";
            try {
                $res = $this->pdo->prepare($query);
                $res->execute();
                if ($res) {
                    return $res;
                } else {
                    echo "Failed to select";
                    var_dump(http_response_code(500));
                }
            } catch (PDOException $e) {
                $msg = $e->getMessage();
                echo $msg;
            }
        }



// Update
function updateRepas($id_repas,$nom_repas,$prix,$id_categorie) {
    if ($this->pdo == null) {
        echo "<br><br>PDO is null: <br>Repas->delete_repas()";
        return;
    }
    $query = "UPDATE `repas` SET  `id`='$id_repas',`nom_repas`='$nom_repas',`prix`='$prix',`id_categorie`='$id_categorie' WHERE id=$id_repas";
    try {
        $statement = $this->pdo->prepare($query);
        $res = $statement->execute();
        if ($res) {
            echo "Successfully updated etudiant";
        } else {
            echo "Failed to update";
            var_dump(http_response_code(500));
        }
    } catch (PDOException $e) {
        $msg = $e->getMessage();
        echo $msg;
    }
}







    }
    