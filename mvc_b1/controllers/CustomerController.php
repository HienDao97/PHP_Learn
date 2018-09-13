<?php 
	include_once('models/Customer.php');
	class CustomerController{
		// hien thi danh sach
		public function list(){
			
			$customermodel = new Customer();
			$data = $customermodel->All();

			include_once('views/customer/list.php');
		}

		//them 1 san pham
		// start

		public function add(){
			$customer['MaKH']='';
			$customer['TenKH']='';
			$customer['SDT']='';
			$customer['Email']='';
			$customer['DiaChi']='';

			include_once('views/customer/add.php');
		}

		public function store(){
			$data = $_POST;
			
			unset($data['creat']);

			$customermodel = new Customer();
			$status = $customermodel->Creat($data);


			if($status==1){
				// them thanh cong
				header('Location:?mod=customer&act=list');
			}else{

				$customer=$data;
				echo "them khong thanh cong";
				include_once('views/customer/add.php');

				
			}
		}

		// end

		// xem chi tiet san pham
		public function detail(){
			$customermodel = new Customer();
			$MaKH = $_GET['MaKH'];
			$customer = $customermodel->find($MaKH);
			include_once('views/customer/detail.php');
		}

		public function edit(){
			$customermodel = new Customer();
			$MaKH = $_GET['MaKH'];
			$customer = $customermodel->find($MaKH);
			include_once('views/customer/edit.php');
		}

		public function update(){
			$data = $_POST;
			
			unset($data['Update']);

			$customermodel = new Customer();
			$status = $customermodel->update($data);


			if($status==1){
				header('Location:?mod=customer&act=list');
			}
		}

		public function delete(){
			$customermodel = new Customer();
			$MaKH = $_GET['MaKH'];
			$status = $customermodel->Delete($MaKH);
			if($status==1){
				header('Location:?mod=customer&act=list');
			}
		}

		
	}

 ?>