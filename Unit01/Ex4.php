<?php 
echo "Tinh tong 1+2+ ... +n <br>";
$n= 5;
$sum =0;
do {
	for ($i=1; $i <=$n ; $i++) {
	$sum+=$i; 
		# code...
	}
	# code...
} while ($n<0);
echo "Ket qua :".$sum;
?>