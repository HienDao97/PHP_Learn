<?php 

include('SinhVien.php');
// khoi tao doi tuong sv
$sv = new SinhVien();

//set gia tri cho thuoc tinh
$sv->ten="Tran Hoang Long";
$sv->ngaySinh="26/5/2018";
$sv->queQuan="Ha Noi";
$sv->gioiTinh="Nam";
$sv->MSSV="20151234";
$sv->lop="Viet Nhat k60";
$sv->khoa="CNTT&TT";
$sv->truong="DH BKHN";
$sv->diem=2.5;

// in thong tin ra man hinh

$sv->inTT();


 ?>