<?php 

	class News
	{


		public static function getNewsItemById($id)
		{
			$id = intval($id);

			if ($id) {

				$result = DB :: $dbh->query('SELECT * FROM news WHERE id='. $id);

				$newsItem = $result->fetch();

				return $newsItem;
			}
		}

		public static function getNewsList()
		{

			$newsList=array();

			$result = DB :: $dbh->query('SELECT id, title, short_content, rang, img_1, img_2, img_3, text '
				. 'FROM news '
				. 'ORDER BY rang DESC '
				. 'LIMIT 10');

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
	}





?>