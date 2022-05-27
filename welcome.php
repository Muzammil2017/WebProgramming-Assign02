<?php
$a=$_POST["a"];
$b=$_POST["b"];
$c=$_POST["c"];

echo"<h1>RESULT</h1>";
echo $a."x² + ".$b."x + ".$c." = 0<p>";


$delta=(pow($b,2))-(4*$a*$c);


if (!isset($a) or !isset($b) or !isset($c)) {
	echo "Please input all values above!";
}

elseif ($a==0) {
	echo "The equation is not quadratic!";
}

// If delta<0
elseif ($delta<0) {
	
	$realpart=round((($b*-1)/(2*$a)),3);

	$ipart=round((pow($b,2)-(4*$a*$c)),3);

	echo "x = $realpart ± √$ipart<p>";

	echo "x = $realpart + ".round(sqrt($ipart*-1),3)."i or $realpart - ".round(sqrt($ipart*-1),3)."i<p>";
}

// If delta>0
elseif ($delta>0) {
	
	$rootplus=round((($b*-1)+sqrt(pow($b,2)-4*$a*$c))/(2*$a),3);


	echo "x = $rootplus or $rootmin.";
}

elseif ($delta==0) {
	
	$rootrep=round((($b*-1)+sqrt(pow($b,2)-4*$a*$c))/(2*$a),3);

	echo "x = $rootrep (repeated)";
}

?>