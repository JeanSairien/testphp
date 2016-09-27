
<?php
	
  try {
    $hostname = "localhost";
    $dbname = "app-pinterest";
    $username = "root";
    $pw = "facesimplon";
    $pdo = new PDO ("mysql:host=$hostname;dbname=$dbname","$username","$pw");
  } catch (PDOException $e) {
    echo "Failed to get DB handle: " . $e->getMessage() . "\n";
    exit;
  }
  		/*dontwork*//* show user*/
        /*$sql = "select * from SuperUser where pseudo = ?  and pass = ?";
        $result = $dbh->prepare($sql);
        $result->execute(array($this->_pseudo, $this->_pwd)); 
        $temp= $result->fetchAll(\PDO::FETCH_NAMED);
        return count($temp)==1;
        print_r($result);*/


        /*work*/
        /*show user*/
      $query = "select * from user where pseudo = ? and pass = ?";

      $params = array("testuser", "nnnn");
      $hander = $pdo->prepare($query);
      $hander->execute($params );
     
      for($i=0; $row = $hander->fetch(); $i++){
        print_r($row);
      }

      unset($pdo);
      unset($query);


      /*show blocs*/ /*work*/
	/*try {
	$hostname = "localhost";
	$dbname = "app-pinterest";
	$username = "root";
	$pw = "facesimplon";
	$pdo = new PDO ("mysql:host=$hostname;dbname=$dbname","$username","$pw");
	} catch (PDOException $e) {
	echo "Failed to get DB handle: " . $e->getMessage() . "\n";
	exit;
	}


      $query = "select * from blocs where titre = ? and date = ?";

      $params = array("testbloc", "2016-09-27");
      $hander = $pdo->prepare($query);
      $hander->execute($params );
     
      for($i=0; $row = $hander->fetch(); $i++){
        print_r($row);
      }

      unset($pdo);
      unset($query);


      // function for php project app pinterest do not delete
       public function read(){
        $dbh = DBSingleton::getInstance()->getConnection();
              
        $query = "select * from user where id = ? and pseudo = ? and pass = ?";
        $params = array("1", "testuser", "nnnn");
        $hander = $pdo->prepare($query);
        $hander->execute($params );

        for($i=0; $row = $hander->fetch(); $i++){
        print_r($row);
        }
        unset($pdo);
        unset($query);

            
      }*/

?>        
