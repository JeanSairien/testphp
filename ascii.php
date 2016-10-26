
<!-- code perso-->

<?php
$str = "ABCDEFGHIJKLMNOPKRSTUVWXYZ";
$ord =  ord($str[4])  ;
$char = $str[12];


  echo $ord;
  echo $char;
?>


<!--Coding game ascii -->
<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

$str = 'ABCDEFGHIJKLMNOPKRSTUVWXYZ';



fscanf(STDIN, "%d",
    $L
);
fscanf(STDIN, "%d",
    $H
);
$T = stream_get_line(STDIN, 256 + 1, "\n");


$pos = strpos($str, $T);

for ($i = 0; $i < $H; $i++)
{
    $ROW = stream_get_line(STDIN, 1024 + 1, "\n");
    
    echo substr($ROW, $pos*$L, $L)."\n";
    //error_log(var_export(($str[12]), true));
        }
    