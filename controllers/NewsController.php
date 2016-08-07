<?php 
	
	include_once ROOT.'/models/News.php';

	class NewsController
	{


		public function actionIndex()
		{
			
			$newsList = array();
			$newsList = News::getNewsList();

			require_once(ROOT.'/views/news/index.php');

			return true;
		}


		public function actionView($id)
		{
			$newsList = News::getNewsItemById($id);

			require_once(ROOT.'/views/news/new.php');

			return true;
		}
		
		public function actionError()
		{
			require_once(ROOT.'/views/news/404.html');

			return true;
		}


	}



?>