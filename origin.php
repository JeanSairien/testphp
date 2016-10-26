<?php
/**
* Auto-generated code below aims at helping you parse
* the standard input according to the problem statement.
**/
$MESSAGE = stream_get_line(STDIN, 100 + 1, "\n");$separator = ' ';
$MESSAGE = 'dur dur le php des le matin, merci erwann !' ;
$letters = str_split($MESSAGE);
$ascci_letters = "";
for($i=0; $i<count($letters); $i++){
   $asc_l=ord($letters[$i]);
   
   $bin_l = decbin($asc_l);
   while(strlen($bin_l)<7){
       $bin_l = '0'.$bin_l;
   }
   $ascci_letters .= $bin_l;
}$res = "";$prefix = ['00', '0'];
$letters = str_split($ascci_letters);
if(count($letters)>0){
   $cpt = 1;
   $lastval = $letters[0];
}
for($i=1; $i<count($letters); $i++){
   if($lastval == $letters[$i])
       $cpt++;
   else{
       if(strlen($res)>0) $res.= $separator;
       $res.= $prefix[$lastval].$separator;
       for($n=0; $n<$cpt; $n++){
           $res.='0';
       }
       $lastval = $letters[$i];
       $cpt = 1;
   }
}
if(strlen($res)>0) $res.= $separator;
$res.= $prefix[$lastval].$separator;
for($n=0; $n<$cpt; $n++){
   $res.='0';
}
echo $res."\n";
?>