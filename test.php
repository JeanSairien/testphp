
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
  		
  		/*function ShowSelect(){
  		        $sql = "select * from blocs where 1";
  		        $params = array("1");
  		        $result = $pdo->mysql_query($sql);
  		        $result->execute($params); 
  		        $temp= $result->fetchAll(\PDO::FETCH_NAMED);
  		        return count($temp)==1;
  		        
		
		
        		var_dump($result);
  		    }

  		    ShowSelect();*/


      /*$query = "select * from blocs where titre = ? and date = ?";

      $params = array("testblock", "2016-09-26");
      $hander = $pdo->prepare($query);
      $hander->execute($params );
     
      	for($i=0; $row = $hander->fetch(); $i++){
        print_r($row);


		/*foreach($query as $row){
		echo $i." - ".$row['user']."<br/>";
      

      unset($pdo);
      unset($query);*/

?>        
