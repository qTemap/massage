<?php 

class Orders
{

	public static function GetOrderList()
	{
		$orderList=array();

			$result = DB :: $dbh->query('SELECT orders.id, orders.user_name, orders.product_name, orders.user_tel, orders.price, news.title, news.img_1 '
				. 'FROM orders, news '
				. 'WHERE orders.product_name = news.id '
				. 'AND orders.cookie = ? '
				. 'ORDER BY orders.id DESC '
				. 'LIMIT 10', array($_COOKIE['user']));

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

}








?>