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