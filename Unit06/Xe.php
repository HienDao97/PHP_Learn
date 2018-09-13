<?php 
	class Xe {
		var $tenXe;
		var $hangXe;
		public $mauSac;
		public $soCho;

		function __construct(){
			//echo "Phuong thuc khoi tao";
		}

		function dichuyen(){
			echo "<br> Xe chay nhanh";
		}

		function inTT(){
			echo "<br>Thong tin xe";
			echo "<br> Ten xe: " .$this->tenXe;
			echo "<br> Hang xe: " .$this->hangXe;
			echo "<br> Mau xe: " .$this->mauSac;
			echo "<br> So cho xe: " .$this->soCho;
		}


	}

	class XeBo extends Xe{
		var $soBo;
		function dichuyen(){
			echo "<br> Xe bo dung bo keo";
		}

	}
// khoi tao doi tuong
	$bmw = new Xe();
// set gia tri thuoc tinh

	$bmw->tenXe="BMW X6";
	$bmw->hangXe="BMW";
	$bmw->mauSac="Trang";
	$bmw->soCho="4";

	// goi phuong thuc
	$bmw->inTT();
	$bmw->dichuyen();

	$xeBo = new XeBo();
	$xeBo->tenXe="Xe Bo";
	$xeBo->soCho="1";
	
	$xeBo->inTT();
	$xeBo->dichuyen();
 ?>