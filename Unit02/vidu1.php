<?php 



$info= array();
$info['code'] = '21234';
$info['email'] = 'bk@gmail.com';
$info['phone'] = '012344566';
$info['Address'] = 'Ha Noi';

$subject = array('java', 'php','frontend');
$info['Suject']= $subject;

$subject1 = array('java1', 'php1','frontend1');
$info['Suject1']= $subject1;

echo "<pre>";
	print_r($info);
echo "</pre>";

echo "<br>";
echo "<h5>MSSV:</h5>". $info['code'];
echo "<h5>Email:</h5>". $info['email'];
echo "<h5>SDT:</h5>". $info['phone'];
echo "<h5>Address:</h5>". $info['Address'];



echo "<h5>Suject:</h5>".$info['Suject'][2];
echo "<br>";
if((in_array('Laravel', $info))){
	echo "Gia tri ton tai.";
}else{
	echo "Gia tri khong ton tai";
}


echo "<br>";
echo "Số lượng phần tử trong mảng: " . count($info);
echo "<br>";


 $arr = array(1,3,1,5,"zent",1,5,"zent");

  $arr_result = array_count_values($arr);

  echo "<pre>";
    print_r($arr_result);
  echo "</pre>";
  echo "<br>";
 if(array_key_exists('0',$info['Suject'])){
          echo "Subject: " . $info['Suject'][0];
    }else{
          echo "Không tồn tại key";
    }



?>