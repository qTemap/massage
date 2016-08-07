<?php 


	class Panel
	{

		public function GetAdminName($name)
		{
			$result = DB :: $dbh->queryFetch('SELECT * FROM admin WHERE login = "1"');
			if($name == md5($result['password'])) {
				require_once(ROOT.'/views/admin/index.php');
			}
		}

		public function Head() 
		{
			header("Location: /index.php/news"); exit;
		}

		public function GetListProducts() 
		{
			$productsList=array();

			$result = DB :: $dbh->query('SELECT id, title, short_content, rang, img_1, img_2, img_3, text '
				. 'FROM news '
				. 'ORDER BY id DESC');

			$i = 0;
			while($row = $result->fetch()) {
				$productsList[$i]['id'] = $row['id'];
				$productsList[$i]['title'] = $row['title'];
				$productsList[$i]['short_content'] = $row['short_content'];
				$productsList[$i]['rang'] = $row['rang'];
				$productsList[$i]['img_1'] = $row['img_1'];
				$productsList[$i]['img_2'] = $row['img_2'];
				$productsList[$i]['img_3'] = $row['img_3'];
				$productsList[$i]['text'] = $row['text'];
				$i++;
			}
			return $productsList;
		}

		public function DelProduct($id) 
		{
			DB :: $dbh -> query("DELETE FROM `news` WHERE `id` = ? ;", array($id));
		}

		public function GetProductById($id)
		{
			$id = intval($id);

			if ($id) {

				$result = DB :: $dbh->query('SELECT * FROM news WHERE id='. $id);

				$productsItem = $result->fetch();

				return $productsItem;
			}
		}

		public function UptadeInfoForProduct($id, $title, $short_content, $rang, $text, $price)
		{
			DB :: $dbh -> query("UPDATE news SET title = ?, short_content = ?, rang = ?, text = ?, price = ? 
								 WHERE id = ?;",
								 array($title, $short_content, $rang, $text, $price, $id));
		}

		public function AddNewProduct($title, $short_content, $rang, $text, $price) 
		{
			$uploaddir=ROOT.'/template/img/';
			$i = 1;
			$mass = array();
			foreach ($_FILES["pictures"]["error"] as $key => $error) {
				if ($error == UPLOAD_ERR_OK) {
			        $tmp_name = $_FILES["pictures"]["tmp_name"][$key];
			        $name = $uploaddir.basename($_FILES["pictures"]["name"][$key]);
			        $file = '/template/img/'.$_FILES['pictures']['name'][$key];
			        $key++;
			        if(isset($tmp_name)) {			        	
				        move_uploaded_file($tmp_name, $name);			     
			        }
			    }
			    $mass[$key] = $file;
			}

			DB :: $dbh -> query("INSERT INTO news (title, short_content, rang, img_1, img_2, img_3, text, price) 
								 VALUES ( ?, ?, ?, ?, ?, ?, ?, ?); 
								 LIMIT 1", 
								 array($title, $short_content, $rang, $mass[1], $mass[2], $mass[3], $text, $price));

			header("Location: /index.php/panel/products"); exit;
		}

		public function AllOrders() 
		{
			$orderList = array();

			$result = DB :: $dbh->query('SELECT orders.id, orders.user_name, orders.product_name, orders.user_tel, orders.price, news.title, news.img_1 '
				. 'FROM orders, news '
				. 'WHERE orders.product_name = news.id '
				. 'ORDER BY orders.id DESC ');

			$i = 0;
			while($row = $result->fetch()) {
				$orderList[$i]['id'] = $row['id'];
				$orderList[$i]['user_name'] = $row['user_name'];
				$orderList[$i]['title'] = $row['title'];
				$orderList[$i]['user_tel'] = $row['user_tel'];
				$orderList[$i]['price'] = $row['price'];
				$orderList[$i]['img_1'] = $row['img_1'];
				$i++;
			}

			return $orderList;	
		}

		public function GetOrderById($id)
		{
			$id = intval($id);

			if ($id) {

				$result = DB :: $dbh->query('SELECT orders.id, orders.user_name, orders.product_name, orders.user_tel, orders.price, news.title, news.img_1 '
				. 'FROM orders, news '
				. 'WHERE orders.product_name = news.id '
				. 'AND orders.id = ? '
				. 'ORDER BY orders.id DESC ', array($id));

				$orderItem = $result->fetch();

				return $orderItem;
			}
		}

		public function GetListCategory()
		{
			$result = DB :: $dbh->query('SELECT * FROM category');

			$i = 0;
			while($row = $result->fetch()) {
				$categoryList[$i]['id'] = $row['id'];
				$categoryList[$i]['name'] = $row['name'];
				$i++;
			}
			
			return $categoryList;
		}


	}








?>