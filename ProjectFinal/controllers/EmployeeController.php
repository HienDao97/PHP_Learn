<?php 
	include_once('models/Employee.php');
	class EmployeeController{
		public function list(){
			
			$employeemodel = new Employee();
			$data = $employeemodel->All();
			$employee['MaNV']='';
			$employee['TenNV']='';
			$employee['SDT']='';
			$employee['Email']='';
			$employee['MatKhau']='';

			include_once('views/admin/employee/list.php');
		}

		public function add(){
			$employee['MaNV']='';
			$employee['TenNV']='';
			$employee['SDT']='';
			$employee['Email']='';
			$employee['MatKhau']='';
			include_once('views/admin/employee/list.php');
		}

		public function store(){
			$data = $_POST;
			$data['MatKhau']=md5($_POST['MatKhau']);
			
			unset($data['creat']);
			

			$employeemodel = new Employee();
			$status = $employeemodel->Creat($data);


			if($status==1){
				setcookie('msg','Thêm mới thành công !',time()+1);
				header('Location:?mod=employee&act=list');
			}else{

				$employee=$data;
				setcookie('msg-false','Mã vừa thêm đã tồn tại !',time()+1);
				header('Location:?mod=employee&act=list');

				
			}
		}

		public function edit(){
			$employeemodel = new Employee();
			$MaNV = $_GET['MaNV'];
			$employee = $employeemodel->find($MaNV);
			include_once('views/admin/employee/edit.php');
		}

		public function update(){
			$data = $_POST;
			$data['MatKhau']=md5($_POST['MatKhau']);
			
			unset($data['Update']);

			$employeemodel = new Employee();
			$status = $employeemodel->update($data);


			if($status==1){
				header('Location:?mod=employee&act=list');
			}
		}

		public function detail(){
			$employeemodel = new Employee();
			$MaNV = $_GET['MaNV'];
			$employee = $employeemodel->find($MaNV);
			include_once('views/admin/employee/detail.php');
		}

		public function delete(){
			$employeemodel = new Employee();
			$MaNV = $_GET['MaNV'];
			$status = $employeemodel->Delete($MaNV);
			if($status==1){
				header('Location:?mod=employee&act=list');
			}
		}

		

	}

 ?>