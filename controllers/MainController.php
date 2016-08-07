<?php 

	class MainController
	{

		public function actionHead()
		{

			require_once(ROOT.'/views/catalog/index.php');

			return true;
		}

	}

?>