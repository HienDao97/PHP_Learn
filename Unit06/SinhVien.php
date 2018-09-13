<?php 
	include('Nguoi.php');
	class SinhVien extends Nguoi{
		var $MSSV;
		var $lop;
		var $khoa;
		var $truong;
		var $diem;

		function inTT(){
			parent::inTT();
			echo "<br>MSSV : ".$this->MSSV;
			echo "<br>Lop :".$this->lop;
			echo "<br>Khoa :".$this->khoa;
			echo "<br>Truong :".$this->truong;
			echo "<br>Diem :" .$this->diem;
		}
	}
 ?>