<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<link rel="stylesheet" href="/template/css/style_products.css">
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


		<div class="content" id="content">
			<input type="button" value="Меню" class="panel_menu">
			<input type="button" value="Добавить категорию" class="add_category">
			


		</div>

		<div class="footer">
			
		</div>
	</body>
	<script>

		$('.add_category').click(function() {
			document.location.href = "/index.php/panel/category/new";
		});

		$('.panel_menu').click(function() {
			document.location.href = "/index.php/panel";
		});

		var height = $('#news').outerHeight(true);
		var count_news = $('div#news').length;	
		var height_content = count_news*height+200;
		$('.content').height(height_content);
		
	</script>
</html>