<?php 


date_default_timezone_set('Asia/Ho_Chi_Minh');
echo "<br>".date('Y-m-d H:i:s',time());

// $timezone = DateTimeZone::listIdentifiers() ;
// foreach ($timezone as $item){
// 	echo $item . '<br/>';
// }

$dateint = mktime(0, 0, 0, 5, (20 + 17), 2018);
echo "<br>" .date('d/m/Y', $dateint); 
?>