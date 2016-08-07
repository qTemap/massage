<?php 

	include_once ROOT.'/models/Catalog.php';
	
	class CatalogController
	{

		public function actionIndex()
		{
			$catalogList = array();
			$catalogList = Catalog::getCatalogList($_GET['pages']);

			$countPages = Catalog::GetCountPages();

			require_once(ROOT.'/views/catalog/index.php');

			return true;
		}

		public function actionView($id)
		{

			$catalogList = Catalog::getCatalogItemById($id);

			if(isset($_POST['order'])) {
				DB :: $dbh -> query("INSERT INTO `orders` (`product_name`, `cookie`) VALUES ( ?, ? ); LIMIT 1", array($id,$_COOKIE['user']));
			}

			require_once(ROOT.'/views/catalog/catalog.php');

			return true;
		}

		public function actionCategory($category)
		{
			
			$catalogList = array();
			$catalogList = Catalog::GetCatalogByCategory($category);

			require_once(ROOT.'/views/catalog/category.php');

			return true;

		}
	}

 ?>