

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


    $reponse = $bdd->query('SELECT * FROM t_groupe WHERE gro_id = 1' );
    while ($donnees = $reponse->fetch()){

          echo $donnees['gro_name'];


    }

 $relatedGroups = "SELECT * FROM t_groupe WHERE gro_name =:groupname AND gro_password =:password;";
        
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
    }
        





  $db = "UPDATE `t_groupe` SET gro_temp_key = $key WHERE gro_name = :groupname";
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
                        $query = $this->getDb()->execute(array('groupname' => $data['groupname']));




    
         ?>