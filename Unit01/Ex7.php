<?php 
echo "Tinh tong S = 1+1/2!+...+1/n! <br>";
$sum =0;
$m=1;
$n = 2;
do {
	for ($i=1; $i <=$n ; $i++) { 
		$m*=$i;
		$sum +=(1/$m);
		# code...
	}
	# code...
} while ($n <=0);
echo "Tong S= " .$sum;
 ?>