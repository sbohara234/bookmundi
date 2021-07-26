<?php
Class Connection {
private  $server = "mysql:host=localhost;dbname=db_bookmundi";
private  $user = "root";
private  $pass = "";
private $options  = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,);
protected $con;
 
            public function openConnection()
             {
               try
                 {
          $this->con = new PDO($this->server, $this->user,$this->pass,$this->options);
          return $this->con;
                  }
               catch (PDOException $e)
                 {
                     echo "There is some problem in connection: " . $e->getMessage();
                 }
             }
public function closeConnection() {
     $this->con = null;
  }
}

try
{
    $database = new Connection();
    $db = $database->openConnection();
    $sql = "SELECT * FROM tbl_user " ;
    $stmt=$db->prepare($sql);
    $stmt->execute();
    $users = $stmt->fetchAll();
    foreach ($users as $row) {
    echo " ID: ".$row['id'] . "<br>";
    echo " Name: ".$row['user_name'] . "<br>";
    }
}
catch (PDOException $e)
{
    echo "There is some problem in connection: " . $e->getMessage();
}

?>



