<?php 
	class Nguoi{
		var $ten;
		var $ngaySinh;
		var $queQuan;
		var $gioiTinh;


		function inTT(){
			echo "THONG TIN";
			echo "<br>--------------";
			echo "<br>Ho ten :" .$this->ten;
			echo "<br>Ngay sinh :" .$this->ngaySinh;
			echo "<br>Que quan :" .$this->queQuan;
			echo "<br>Gioi tinh :" .$this->gioiTinh;


		}
	}
 ?>