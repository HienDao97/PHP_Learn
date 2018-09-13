<?php 

$name ="Tran Hoang Long";
echo "Chuoi dau vao:".$name;
$data = explode(" ", $name);
$count = count($data);

echo "<pre>";
	print_r($data);
echo "</pre>";
echo "<br>Ket qua dau ra:";
echo "<br>Ho:".$data[0];
echo "<br>Dem:";
for ($i=1; $i <=$count-2 ; $i++) { 
	echo $data[$i];
}

echo "<br>Ten:".$data[count($data)-1];


 ?>