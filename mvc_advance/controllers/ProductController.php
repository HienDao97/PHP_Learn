<?php 
	include_once('models/Product.php');
	class ProductController{
		public function list(){
			
			$productmodel = new Product();
			$data = $productmodel->All();

			include_once('views/product/list.php');
		}

		public function add(){
			$product['MaSP']='';
			$product['TenSP']='';
			$product['SoLuong']='';
			$product['DonGia']='';



			include_once('views/product/add.php');
		}

		public function store(){
			$data = $_POST;
			
			unset($data['creat']);

			$productmodel = new Product();
			$status = $productmodel->Creat($data);


			if($status==1){
				header('Location:?mod=product&act=list');
			}else{

				$product=$data;
				echo "them khong thanh cong";
				include_once('views/product/add.php');

				
			}
		}

		public function delete(){
			$productmodel = new Product();
			$MaSP = $_GET['MaSP'];
			$status = $productmodel->Delete($MaSP);
			if($status==1){
				header('Location:?mod=product&act=list');
			}
		}

		

		public function detail(){
			$productmodel = new Product();
			$MaSP = $_GET['MaSP'];
			$product = $productmodel->find($MaSP);
			include_once('views/product/detail.php');
		}

		public function edit(){
			$productmodel = new Product();
			$MaSP = $_GET['MaSP'];
			$product = $productmodel->find($MaSP);
			include_once('views/product/edit.php');
		}

		public function update(){
			$data = $_POST;
			
			unset($data['Update']);

			$productmodel = new Product();
			$status = $productmodel->update($data);


			if($status==1){
				header('Location:?mod=product&act=list');
			}
		}


	}

 ?>