<?php 
	include_once('models/Product.php');
	include_once('models/Product_type.php');
	class ProductController{
		public function list(){
			
			$productmodel = new Product();
			// $data = $productmodel->All();
			$data = $productmodel->ListProduct();


			$product['MaSP']='';
			$product['TenSP']='';
			$product['SoLuong']='';
			$product['DonGia']='';

			include_once('views/admin/product/list.php');
		}

		public function add(){

			$product_type = new Product_type();
			$types = $product_type->All();

			$product['MaSP']='';
			$product['TenSP']='';
			$product['SoLuong']='';
			$product['DonGia']='';



			   include_once('views/admin/product/add.php');
			// include_once('views/admin/product/list.php');
		}

		public function store(){

			
			$data =array();
			$data = $_POST;
			
			unset($data['creat']);

			$productmodel = new Product();

			if (isset($_FILES['fileToUpload']))
	        {
	            // Nếu file upload không bị lỗi,
	            // Tức là thuộc tính error > 0
	            if ($_FILES['fileToUpload']['error'] > 0)
	            {
	                echo 'File Upload Bị Lỗi';
	            }
	            else{
	                // Upload file
	                move_uploaded_file($_FILES['fileToUpload']['tmp_name'], './image/'.$_FILES['fileToUpload']['name']);
	                $path='image/'.$_FILES['fileToUpload']['name'];
	                $data['image']=$path;

	            }
	        }


			$status = $productmodel->Creat($data);

			


			if($status==1){
				setcookie('msg','Thêm mới thành công',time()+1);
				header('Location:?mod=product&act=list');
			}else{

				$product=$data;
				setcookie('msg-false','Mã vừa thêm đã tồn tại',time()+1);
				header('Location:?mod=product&act=list');

				
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
			$product = $productmodel->search($MaSP);

			include_once('views/admin/product/detail.php');
		}

		public function edit(){
			$product_type = new Product_type();
			$types = $product_type->All();



			$productmodel = new Product();
			$MaSP = $_GET['MaSP'];


			$product = $productmodel->find($MaSP);
			include_once('views/admin/product/edit.php');
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