<?php
  
  $name ="Zent Group - Be all you can be !";

// Cat chuoi theo ky tu mong muon
$data = explode("can",$name);

echo "<pre>";
	print_r($data);
echo "</pre>";

$new = implode("---", $data);
echo $new;
echo "<br>";
echo("so luong phan tu mang:").count($data);
echo "<br>";
echo "<br> do dai chuoi : ".strlen($data[0]);

echo "<br>".strpos($name,"o");
?>