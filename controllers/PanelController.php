<?php 
	
	include_once ROOT.'/models/Panel.php';

	class PanelController
	{


		public function actionIndex()
		{
			if(isset($_COOKIE['name'])) {
				Panel::GetAdminName($_COOKIE['name']);
			} else {
				Panel::Head();
			}
			
			return true;
		}

		public function actionProducts() 
		{
			if(isset($_COOKIE['name'])) {			
				$productsList = array();
				$productsList = Panel::GetListProducts();

				if(isset($_POST['del'])) {
					$id = $_POST['del'];
					Panel::DelProduct($id);				
				}

				require_once(ROOT.'/views/admin/products.php');
			} else {
				Panel::Head();
			}

			return true;
		}

		public function actionProduct($id)
		{
			if(isset($_COOKIE['name'])) {

				$productsItem = Panel::GetProductById($id);

				if(isset($_POST['text'])) {
					$title = $_POST['title'];
					$short_content = $_POST['short_content'];
					$rang = $_POST['rang'];
					$text = $_POST['text'];
					$price = $_POST['price'];
					Panel::UptadeInfoForProduct($id, $title, $short_content, $rang, $text, $price);
				}

				if(isset($_POST['ok'])) {
					$uploaddir=ROOT.'/template/img/';
					$i = 1;
					foreach ($_FILES["pictures"]["error"] as $key => $error) {
						if ($error == UPLOAD_ERR_OK) {
						        $tmp_name = $_FILES["pictures"]["tmp_name"][$key];
						        $name = $uploaddir.basename($_FILES["pictures"]["name"][$key]);
						        $file = '/template/img/'.$_FILES['pictures']['name'][$key];
						        $key++;
						        if(isset($tmp_name)) {
						        move_uploaded_file($tmp_name, $name);				      		
						        DB :: $dbh -> query("UPDATE news SET img_$key = ? WHERE id = ?;",array($file, $id));				     
					        }
					    }
					}
					header("Location: /index.php/panel/product/$id#"); exit;
				}

				require_once(ROOT.'/views/admin/product.php');
			} else {
				Panel::Head();
			}

			return true;
		}

		public function actionNew()
		{
			if(isset($_COOKIE['name'])) {

				$categoryList = array();
				$categoryList = Panel::GetListCategory();

				if(isset($_POST['add'])) {
					$title = $_POST['title'];
					$short_content = $_POST['short_content'];
					$rang = $_POST['rang'];
					$text = $_POST['text'];
					$price = $_POST['price'];
					Panel::AddNewProduct($title, $short_content, $rang, $text, $price);
				}

				require_once(ROOT.'/views/admin/new.php');
				
			} else {
				Panel::Head();
			}

			return true;
		}

		public function actionOrders() 
		{

			$orderList = array();

			$orderList = Panel::AllOrders();

			require_once(ROOT.'/views/admin/orders.php');

			return true;
		}

		public function actionOrder($id)
		{

			$orderItem = Panel::GetOrderById($id);

			require_once(ROOT.'/views/admin/order.php');

			return true;
		}

		public function actionCategory()
		{
			require_once(ROOT.'/views/admin/category.php');

			return true;
		}



	}








?>