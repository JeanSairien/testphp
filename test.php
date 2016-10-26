

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
        ?>


    
    
         