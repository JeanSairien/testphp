

<?php

     
     $user = "red";
     $pass = "admin";
     

     function getMessage(){

        echo 'youre wrong';

     }
  

    try {
    
    $bdd = new PDO('mysql:host=localhost;dbname=FriendlySold;charset=utf8', 'red', 'admin');
    var_dump($bdd);
            
        } 

// try catch end
    catch (Exception $e) {

            die('Erreur : '.$e->getMessage());
            
        }    



     /*function find($id) {
        if ($id == null){
             throw new \Exception("id null ");
        } else {

        $db = "SELECT * FROM t_user WHERE usr_id= $id";
        $row = $this->getDb()->fetchAll($db, array($id));
        $query = $this->getDb()->prepare($db);
        $query -> execute($db , array(
          $id = $row['usr_id'];
          ));
            

        if ($row) {
            /*return $this->buildDomainObject($row);
              return       
                    print_r($row) ;

        } else {
            throw new \Exception("No user matching id " . $id ."."); }

    }
    }*/

   $reponse = $bdd->query('SELECT * FROM t_user WHERE usr_id = $id' );
    while ($donnees = $reponse->fetch()){

          echo $donnees['usr_name'];
          print_r($donnees);


    }

   $reponse = $bdd->query('SELECT * FROM t_groupe WHERE gro_id = 1' );
    while ($donnees = $reponse->fetch()){

          echo $donnees['gro_name'];
          print_r($donnees);


    }

 /*$relatedGroups = "SELECT * FROM t_groupe WHERE gro_name =:groupname AND gro_password =:password;";
        
        $query = $this->getDb()->prepare($relatedGroups);
        $query->execute(array(
            'groupname' => $data['groupname'],
            'password' => $data['password']));
        echo 'le select sql : '.$relatedGroups ; 

        if($relatedGroups = null){

            throw new Exception("login group or password is invalid", 1);
        } else {

            $login = 'vous etes connecté';
            echo $login ;
            session_start($relatedGroups);
            $_session = $data['groupname'];
            $_session = $data['password'];
            var_dump($_session);
    }*/
        





  /*$db = "UPDATE `t_groupe` SET gro_temp_key = $key WHERE gro_name = :groupname";
                $query = $this->getDb()->prepare($relatedGroups);
                $query->execute(array(
                    'groupname' => $data['groupname']));

         }



         $loginkey = true;
         
                if($loginkey == true)
                {

                    $key = rand(100, 999);
                    var_dump($this->db);
                    var_dump($key);
                    //$relatedGroups[0]['gro_id']
                    $db = "UPDATE `t_groupe` SET gro_temp_key = $key WHERE gro_id = :id";
                    $this->getDb()->prepare($db);
                    $this->getDb()->execute(array('id' => $relatedGroups[0]['gro_id']));

                    return $app->json(array(
                        'record'=> $key ,
                        'status'=> 'ok' ,
                        'error'=> $e-> getMessage()), 200);
             if($toto== false) {
                 throw new \Exception("invalid group or password!");
            }
                }

    
    
                 $db = "UPDATE `t_groupe` SET gro_temp_key = 0 WHERE gro_name = :gro_name";
                        $query = $this->getDb()->prepare($db);
                        $query = $this->getDb()->execute(array('groupname' => $data['groupname']));*/


         /* protected function buildDomainObject($row) {

                            $user= new User();

                            $user->setId($row['usr_id']);

                            $user->setUsername($row['usr_name']);

                            $user->setGroup($row['usr_id_groupe']);

                            $user->setColor($row['usr_couleur']);

                            return $user;

                        }*/












         ?>