<?php
/**
* Auto-generated code below aims at helping you parse
* the standard input according to the problem statement.
**/

function doPrefix($res, $lastval, $cpt){
  $prefix = ['00', '0'];
  $separator = ' ';
  if(strlen($res)>0) $res.= $separator;
  $res.= $prefix[$lastval].$separator;
  for($n=0; $n<$cpt; $n++){
  $res.='0';
  }
  return $res;
}

/*$MESSAGE = stream_get_line(STDIN, 100 + 1, "\n");*/

$MESSAGE = 'dur dur le php des le matin, merci erwann !' ;
/*ici on met notre message dans un tableau */
$letters = str_split($MESSAGE);
$ascci_letters = "";
/*ici on compte le nombre de lettre dans le message*/
for($i=0; $i<count($letters); $i++){
  /*ici la fonction ord nous retourne le code ascii de chaques lettres*/
   $asc_l=ord($letters[$i]);
   /*on convertit avec decbin les valeur decimal en binaire*/
   $bin_l = decbin($asc_l);
   /*ici notre boucle while indique que si la longueur est superieur a 7 alors on concatenne la variable avec '0'*/
   while(strlen($bin_l)<7){
       $bin_l = '0'.$bin_l;
   }
   $ascci_letters .= $bin_l;
}
$res = "";
/*on met not charactere en ascii dans un tableau */
$letters = str_split($ascci_letters);
/*puis on verifie si notre nombre de lettre est superieur a 0 et on initialise le compteur a 1*/
if(count($letters)>0){
   $cpt = 1;
   $lastval = $letters[0];
}
for($i=1; $i<count($letters); $i++){
   if($lastval == $letters[$i])
       $cpt++;
   else{
       $res=doPrefix($res, $lastval, $cpt);
       $lastval = $letters[$i];
       $cpt = 1;
   }
}

/*ici on execute une fonction qui remplace notre conditions commenté ci-dessous pour ne pas la repeté plusieur fois */
$res=doPrefix($res, $lastval, $cpt);


  

/*if(strlen($res)>0) $res.= $separator;
$res.= $prefix[$lastval].$separator;
for($n=0; $n<$cpt; $n++){
   $res.='0';
}*/
echo $res."\n";
?>