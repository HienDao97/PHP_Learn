<?php 
include_once('models/Employee.php');
	class LoginController{
		public function formLogin(){
			// tra ve form de login

			if(isset($_SESSION['isLogin'])){
				header('Location: ?mod=product&act=list');
			}
			//include_once('views/Login.php');
			include_once('views/admin/DangNhap.php');
		}

		public function Login(){
			// lay gia tri tu form login

			$email= $_POST['Email'];
			$matkhau=md5($_POST['MatKhau']);

			setcookie("oldmail",$email,time()+5,"/");

			$NhanVienModel = new Employee();
			$result= $NhanVienModel->checkLogin($email,$matkhau);

			if($result!=null){
				//dang nhap thanh cong
				$_SESSION['isLogin']=true;
				$_SESSION['user']= $result;

				header('Location: ?mod=product&act=list');
			}else{
				//dang nhap ko thnah cong
				header('Location: ?mod=login&act=form');
			}
		}

		public function Logout(){
			session_destroy();
			header('Location: ?mod=home&act=doashboard');
		}
	}
 ?>