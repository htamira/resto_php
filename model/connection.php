<?php
 class Connection {
    protected $pdo;

    const datasource = "mysql:localhost=root;dbname=myresto";
    const username = "root";
    const password = "";

    function __construct() {
        try {
            $this->pdo = new PDO(self::datasource, self::username, self::password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
            // set the PDO error mode to exception
            
        } catch (PDOException $e) {
            $msg = $e->getMessage();
            echo $msg;
        }

    }



    function runQuery($query) {
		if($result = mysqli_query($this->conn,$query))
		{
		 
		while($row = mysqli_fetch_assoc( $result)) {
			$resultset[] = $row;
		}		
		if(!empty($resultset))
			return $resultset;
	}
	}	
	function numRows($query) {
		$result  = mysqli_query($this->conn,$query);
		$rowcount = mysqli_num_rows($result);
		return $rowcount;	
	
	}
    function __destruct() {
        $this->pdo = null;
    }
}
?>