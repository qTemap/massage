<?php 

	class Catalog
	{

		public static function getCatalogItemById($id)
		{
			$id = intval($id);

			if ($id) {

				$result = DB :: $dbh->query('SELECT * FROM news WHERE id='. $id);

				$catalogItem = $result->fetch();

				return $catalogItem;
			}
		}

		public static function getCatalogList($page)
		{
			$pages = $page * 10;

			$page = ($page - 1)*10;
			

			$newsList=array();

			$result = DB :: $dbh->query("SELECT id, title, short_content, rang, img_1, img_2, img_3, text 
										 FROM news 
										 ORDER BY id DESC 
										 LIMIT {$page},$pages");

			$i = 0;
			while($row = $result->fetch()) {
				$newsList[$i]['id'] = $row['id'];
				$newsList[$i]['title'] = $row['title'];
				$newsList[$i]['short_content'] = $row['short_content'];
				$newsList[$i]['rang'] = $row['rang'];
				$newsList[$i]['img_1'] = $row['img_1'];
				$newsList[$i]['img_2'] = $row['img_2'];
				$newsList[$i]['img_3'] = $row['img_3'];
				$newsList[$i]['text'] = $row['text'];
				$i++;
			}
			return $newsList;
		}

		public static function GetCatalogByCategory($category)
		{
			$catalogList=array();

			$result = DB :: $dbh->query("SELECT `news`.`id`, `news`.`title`, `news`.`short_content`, `news`.`rang`, `news`.`img_1`, 
										 `news`.`img_2`, `news`.`img_3`, `news`.`text`
										 FROM `news`, `category` 
										 WHERE `category`.`id` = ? 
										 AND `news`.`short_content` = `category`.`name` ", array($category));

			$i = 0;
			while($row = $result->fetch()) {
				$catalogList[$i]['id'] = $row['id'];
				$catalogList[$i]['title'] = $row['title'];
				$catalogList[$i]['short_content'] = $row['short_content'];
				$catalogList[$i]['rang'] = $row['rang'];
				$catalogList[$i]['img_1'] = $row['img_1'];
				$catalogList[$i]['img_2'] = $row['img_2'];
				$catalogList[$i]['img_3'] = $row['img_3'];
				$catalogList[$i]['text'] = $row['text'];
				$i++;
			}
			return $catalogList;
		}

		public static function GetCountPages() 
		{
			$result = DB :: $dbh->query("SELECT COUNT(*) FROM `news`");

			$countPages = $result->fetch();

			return $countPages;
		}
	}



?>