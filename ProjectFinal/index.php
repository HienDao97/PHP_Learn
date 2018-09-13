<?php
	 include_once('helpers/Middleware.php');
	 $middleware= new Middleware();
	// $old;
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
	 		$middleware->isLogin();
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
	 		$middleware->isLogin();
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
	 		include_once('controllers/ProductController.php');
	 		$homeController = new HomeController();

	 		switch ($act) {
	 			case 'doashboard':{
	 				$homeController->Show();
	 			}break;
	 			case 'product':{
	 				$homeController->product();
	 			}break;
	 			case 'product_detail':{
	 				$homeController->product_detail();
	 			}break;

	 			case 'contact':{
	 				$homeController->contact();
	 			}break;

	 			case 'addtocart':{
	 				$homeController->addtocart();
	 			}break;
	 			case 'addtocart2':{
	 				$homeController->addtocart2();
	 			}break;

	 			case 'cart':{
	 				$homeController->cart();
	 			}break;

	 			case 'xoa1':{
	 				$homeController->xoa1();

	 			} break;
	 			case 'Xoa':{
	 				$homeController->Xoa();

	 			}break;
	 			
	 			case 'pay':{
	 				$homeController->pay();
	 			}break;
	 			case 'payment':{
	 				$homeController->payment();
	 			}break;
	 			case 'huybill':{
	 				$homeController->huybill();
	 			}break;
	 				
	 			
	 			default:
	 				$homeController->error();
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

	 	case 'sale':{
	 		include_once('controllers/SaleController.php');


	 		$saleController = new SaleController();
	 		switch ($act) {
	 			case 'creat_bill':{
	 				$saleController->creat_bill();
	 			}break;
	 			case 'purchase':{
	 				$saleController->purchase();
	 			}break;	
	 			case 'sale':{
	 				$saleController->sale();
	 			}break;	
	 			case 'add2cart':{
	 				$saleController->add2cart();
	 			}break;
	 			case 'remove_product':{
	 				$saleController->remove_product();
	 			}break;	
	 			case 'deleteAll':{
	 				$saleController->deleteAll();
	 			}break;
	 			case 'payment':{
	 				$saleController->payment();
	 			}break;
	 			case 'bill_detail':{
	 				$saleController->bill_detail();
	 				$saleController->destroyall();
	 			}break;

	 			case 'bill_detail2':{
	 				$saleController->bill_detail();
	 				
	 			}break;
	 			case 'destroy':{
	 				$saleController->destroy();
	 			}break;

	 			case 'updatebill':{
	 				$saleController->xulyhoadon();


	 			}break;

	 			
	 			default:
	 				echo "Error 404";
	 				break;
	 		}
	 		
	 	}break;
	 	case 'manager':{
	 		include_once('controllers/ManagerController.php');


	 		$managerController = new ManagerController();
	 		switch ($act) {
	 			case 'list':{
	 				$managerController->list();
	 			}break;
	 			
	 			case 'detail':{
	 				$managerController->detail();


	 			}break;
	 			case 'loaddoanhthu':{
	 				$managerController->loaddoanhthu();


	 			}break;

	 			case 'doanhthu':{
	 				$managerController->doanhthu();


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