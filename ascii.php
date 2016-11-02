
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
        }?>
<?php

	

	fscanf(STDIN, "%d", $L);

	fscanf(STDIN, "%d", $H);

	$T = stream_get_line(STDIN, 256 + 1, "\n");

	$T = str_split(strtoupper($T));

	

	for ($i = 0; $i < $H; $i++) {

		$ROW = stream_get_line(STDIN, 1024 + 1, "\n");

		foreach ($T as $letter) {

			$ascii_code = ord($letter);

			$position = ($ascii_code < 65 || $ascii_code > 90) ? 26 : $ascii_code - 65 ;

			$position *= $L;

			echo substr($ROW, $position, $L);

		}

		echo "\n";

	}

	

?>







<?php
	/**
	 * Auto-generated code below aims at helping you parse
	 * the standard input according to the problem statement.
	 **/

	fscanf(STDIN, "%d",
	$n // the number of temperatures to analyse
	

	);
	for($i = 0; $i < $n; $i++)
	$temps = stream_get_line(STDIN, 256 + 1, "\n"); // the n temperatures expressed as integers ranging from -273 to 5526
	$chaud = str_split($temps);
	foreach ($n as $temps) {
		# code...
	}


	// Write an action using echo(). DON'T FORGET THE TRAILING \n
	// To debug (equivalent to var_dump): error_log(var_export($var, true));

echo("result\n");
?>
    