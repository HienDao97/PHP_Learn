<?php 

echo "Tinh s= 1+1/2+1/3+...+1/n <br>";
$n=5;
$sum=0;
do {

	for ($i=1; $i <=$n ; $i++) {
	$sum+=1/$i; 
		# code...
	}
} while ($n <= 0);
echo "Tong S= ".$sum;
 ?>