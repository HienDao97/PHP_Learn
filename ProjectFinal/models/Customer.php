<?php 
	
	include_once('models/Model.php');
	
	class Customer extends Model{
		var $table_name='khachhang';
		var $primary_key='MaKH';


		public function countCustomer(){
			$query="SELECT count(*) FROM khachhang ";
			

			$result =$this->model_conn->query($query);

			$countKH=$result->fetch_assoc();
			return $countKH;
		}
		
	}
 ?>