<?php

include_once("../model/connection.php");
    class Reservation extends Connection{
        private  $id_reservation,$name,$email,$phone,$date,$time,$person,$plat,$message;
    
     function __construct( $name = "", $cin = "",$email= "", $phone = "", $time = "",$date="",$person="",$plat="",$message="") {
//$this->id_reservation=$id_reservation;
        $this->name = $name;
        $this->cin=$cin;
        $this->email = $email;
        $this->phone=$phone;
        $this->date=$date;
        $this->time=$time;
        $this->person=$person;  
        $this->plat=$plat;
        $this->message=$message;
        //$this->repas=$repas;  
        parent::__construct();
    }

        // Add
        function ajout_reservation($name,$cin,$email,$phone,$time,$date,$person,$plat,$message) {
        if ($this->pdo == null) 
        {
            echo "<br><br>PDO is null: <br>Reservation->ajout_reservation()";
            return;
        }           
        
        $query = "INSERT INTO `reservation`(`name`,`cin`,`email`,`phone`, `date`,`time`,`person`,`plat`,`message`)
         VALUES ( ?,?,?,?, ?, ?, ?, ?, ?)";
        try {
            $statement = $this->pdo->prepare($query);
            $res = $statement->execute(array($name,$cin,$email,$phone,$date,$time,$person,$plat,$message));
            if ($res) {
                echo "Successfully added reservation";
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


        function delete_reservation($cin,$date) {
            if ($this->pdo == null) {
                echo "<br><br>PDO is null: <br>Reservation->delete_reservation()";
                return;
            }
            $query = "DELETE FROM `reservation` WHERE   cin = ? and date=? ";
            try {
                $statement = $this->pdo->prepare($query);
                $res = $statement->execute(array($cin,$date));
                if ($res) {
                    echo "<h2><b>Successfully deleted reservation<b></h2>";
                } else {
                    echo "<b>Failed to delete</b>";
                    var_dump(http_response_code(500));
                }
            } catch (PDOException $e) {
                $msg = $e->getMessage();
                echo "<b>" .$msg . "</b>";
            }
        }



        // Select
        function selectAll() {
            if ($this->pdo == null) {
                echo "<br><br>PDO is null: <br>Reservation->selectAll()";
                return;
            }
            $query = "SELECT * FROM `reservation`";
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
                echo "<b>".$msg."<b>";
            }
        }
     
function selectAujourdhui()
{
   // $today = date("Y-m-d");
    if ($this->pdo == null) {
        echo "<br><br>PDO is null: <br>Reservation->selectAujourdhui()";
        return;
    }
    $query = "SELECT * FROM `reservation` where `date` = CURDATE() ";
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
/*
function selectAuj()
 {
        if ($this->pdo == null) {
            echo "<br><br>PDO is null: <br>Reservation->selectAll()";
            return;
        }
        $query = "SELECT * FROM `reservation` where date==CURDTE";
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
    }*/

// Update
function updateReservation($id_reservation,$name,$email,$phone,$time,$person) {
    if ($this->pdo == null) {
        echo "<br><br>PDO is null: <br>Reservation->delete_repas()";
        return;
    }
    $query = "UPDATE `reservation` SET `id_reservation`='$id_reservation',`name`='$name',`email`='$email',`phone`='$phone',`date`='$date' WHERE email=$email";
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
/**/
    
}