<?php 

include_once ROOT.'/models/Orders.php';

class OrderController
{

	public function actionIndex() 
	{
		$orderList = array();

		$orderList = Orders::GetOrderList();

		require_once(ROOT.'/views/orders/index.php');

		return true;
	}

}






?>