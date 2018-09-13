<?php
	include_once('helpers/Middleware.php');
	$middleware= new Middleware();
	$old;
	session_start();
	if (isset($_GET['mod'])) {

		$mod= $_GET['mod'];
	}else{
		$mod='home';
	}

	if (isset($_GET['act'])) {

		$act= $_GET['act'];
	}else{
		$act='doashboard';
	}

		
		
	
	
	switch ($mod) {
	 	case 'product':{
	 		$middleware->isLogin();
	 		include_once('controllers/ProductController.php');
	 		$productController = new ProductController();

	 		switch ($act) {
	 			case 'list':{
	 				$productController->list();


	 			}break;

	 			case 'add':{
	 				$productController->add();


	 			}break;
	 			case 'store':{
	 				$productController->store();


	 			}break;


	 			case 'edit':{
	 				$productController->edit();


	 			}break;

	 			case 'update':{
	 				$productController->update();


	 			}break;


	 			case 'detail':{
	 				$productController->detail();


	 			}break;

	 			case 'delete':{
	 				$productController->delete();


	 			}break;
	 				
	 				
	 			
	 			default:
	 				echo "Phuong thuc khong ton tai";
	 				break;
	 		}
	 	}break;

	 	case 'customer':{
	 		include_once('controllers/CustomerController.php');
	 		$customerController = new CustomerController();

	 		switch ($act) {
	 			case 'list':{
	 				$customerController->list();


	 			}break;

	 			case 'add':{
	 				$customerController->add();


	 			}break;

	 			case 'store':{
	 				$customerController->store();


	 			}break;

	 			case 'edit':{
	 				$customerController->edit();


	 			}break;
	 			case 'update':{
	 				$customerController->update();


	 			}break;

	 			case 'detail':{
	 				$customerController->detail();


	 			}break;

	 			case 'delete':{
	 				$customerController->delete();


	 			}break;
	 				
	 				
	 			
	 			default:
	 				echo "Phuong thuc khong ton tai";
	 				break;
	 		}
	 	}break;

	 	case 'employee':{
	 		include_once('controllers/EmployeeController.php');
	 		$employeeController = new EmployeeController();

	 		switch ($act) {
	 			case 'list':{
	 				$employeeController->list();


	 			}break;

	 			case 'add':{
	 				$employeeController->add();


	 			}break;

	 			case 'store':{
	 				$employeeController->store();


	 			}break;

	 			case 'edit':{
	 				$employeeController->edit();


	 			}break;
	 			case 'update':{
	 				$employeeController->update();


	 			}break;

	 			case 'detail':{
	 				$employeeController->detail();


	 			}break;

	 			case 'delete':{
	 				$employeeController->delete();


	 			}break;
	 				
	 				
	 			
	 			default:
	 				echo "Phuong thuc khong ton tai";
	 				break;
	 		}
	 	}break;
	 		
	 	case 'home':{
	 		include_once('controllers/HomeController.php');
	 		$homeController = new HomeController();
	 		switch ($act) {
	 			case 'doashboard':{
	 				$homeController->Show();
	 			}break;
	 				
	 				
	 			
	 			default:
	 				echo "Error 404";
	 				break;
	 		}
	 		
	 	}break;

	 	case 'login':{
	 		include_once('controllers/LoginController.php');
	 		$loginController = new LoginController();
	 		switch ($act) {
	 			case 'form':{
	 				$loginController->formLogin();
	 			}break;
	 			case 'postLogin':{
	 				$loginController->Login();
	 			}break;	
	 			case 'logout':{
	 				$loginController->Logout();
	 			}break;	
	 			
	 			default:
	 				echo "Error 404";
	 				break;
	 		}
	 		
	 	}break;
	 	
	 	default:
	 		echo "Khong ton tai doi tuong";
	 		break;
	} 
 ?>