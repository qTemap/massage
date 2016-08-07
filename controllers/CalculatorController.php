<?php 

class CalculatorController
{

	public function actionIndex()
	{
		//$catalogList = Catalog::getCatalogList();

		require_once(ROOT.'/views/calculator/index.php');

		return true;
	}
}






?>