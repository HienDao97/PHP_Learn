<?php 
	echo "----In bang ma ASCII--- <br>";
	echo "-- Dung vong lap for <br>";
	for ($i=32; $i <=127 ; $i++) { 
		echo "$i -----".chr($i);
		echo "<br>";
# code...
	}

	echo "--Dung vong lap while <br>";
	$j=32;
	while (($j>=32)&&($j<=127)) {
		echo "$j-----".chr($j);
		echo "<br>";
		$j++;
		# code...
	}

	echo "--Dung vong lap do-while <br>";
	$k =32;
	do {
		# code...
		echo "$k----".chr($k);
		echo "<br>";
		$k++;
	} while (($k>=32)&&($k<=127));

 ?>