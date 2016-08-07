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
<!-- 
			<a href=""><div class="category">Пластиковые окна</div></a>
			<a href=""><div class="category">Межкомнатные двери</div></a>
			<a href=""><div class="category">Жалюзи</div></a>
			<a href=""><div class="category">Ролеты</div></a> -->

			<?php foreach ($catalogList as $catalogItem): ?>
				<div id="news">
					<div class="img"><img src='<?php echo $catalogItem['img_1']; ?>' alt=""></div>
					<div class="title"><?php echo $catalogItem['title']; ?></div>
					<div class="short_content"><?php echo $catalogItem['short_content']; ?></div>
					<a class="all" href="/index.php/catalog/<?php echo $catalogItem['id'];?>">Полностью</a>
				</div>
			<?php endforeach; ?>
		</div>

		<?php require_once ROOT.'/views/footer.php'; ?>
	</body>

	<script>

		var height = $('#news').outerHeight(true);
		var count_news = $('div#news').length;
		count_news = Math.ceil(count_news/2);	
		var height_content = count_news*height+200;
		$('.content').height(height_content);
 	
	</script>

</html>