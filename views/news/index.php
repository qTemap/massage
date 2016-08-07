<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<link rel="stylesheet" href="/template/css/style.css">
		<script type="text/javascript" src="/template/js/jquery-1.11.0.min.js"></script>
		<script src="/template/js/new.js"></script>
	</head>

	<body>

		<div class="header">
			
				<div class="img_site">
					<img src="" alt="">
				</div>
				
				<div class="name_site">
					МИР ЖАЛЮЗИ
				</div>

		</div>

		<?php require_once ROOT.'/views/menu.php'; ?>

		<div class="content" id="content">

			<a href="/index.php/news/services"><div class="services">Просмотреть услуги</div></a>
			<?php foreach ($newsList as $newsItem): ?>
				<div id="news">
					<div class="img"><img src='<?php echo $newsItem['img_1']; ?>' alt=""></div>
					<div class="title"><?php echo $newsItem['title']; ?></div>
					<div class="short_content"><?php echo $newsItem['short_content']; ?></div>
					<a class="all" href="/index.php/news/<?php echo $newsItem['id'];?>">Полностью</a>
				</div>
			<?php endforeach; ?>
		</div>

		<?php require_once ROOT.'/views/footer.php'; ?>
	</body>

	<script>

		var height = $('#news').outerHeight(true);
		var count_news = $('div#news').length;
		count_news = Math.ceil(count_news/2);	
		var height_content = count_news*height;
		$('.content').height(height_content);
 	
	</script>

</html>