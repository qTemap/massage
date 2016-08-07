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
			<input type="button" value="Добавить продукт" class="add_product">
			<?php foreach ($productsList as $productsItem): ?>
				<div id="news">
					<div class="id">Номер продукции: <?php echo $productsItem['id']; ?></div>
					<div class="title">Название продукции: <?php echo $productsItem['title']; ?></div>
					<div class="short_content">Катигория: <?php echo $productsItem['short_content']; ?></div>
					<div class="rang">Рейтинг: <?php echo $productsItem['rang']; ?></div>
					<div class="img_1"><img id="1" src='<?php echo $productsItem['img_1']; ?>' alt=""></div>
					<div class="img_2"><img id="2" src='<?php echo $productsItem['img_2']; ?>' alt=""></div>
					<div class="img_3"><img id="3" src='<?php echo $productsItem['img_3']; ?>' alt=""></div>
					<div class="text">Описание: <?php echo $productsItem['text']; ?></div>
					<a href="/index.php/panel/product/<?php echo $productsItem['id'];?>"><input type="button" value="Обновить информацию" class="update"></a>
					<input type="button" value="Удалить продукцию" class="delete" id='<?php echo $productsItem['id']; ?>'>
				</div>
			<?php endforeach; ?>


		</div>

		<div class="footer">
			
		</div>
	</body>
	<script>
		var height = $('#news').outerHeight(true);
		var count_news = $('div#news').length;	
		var height_content = count_news*height;
		$('.content').height(height_content);


		$('.delete').click(function() {
			var del = $(this).attr("id");
			$.ajax({
				type: "POST",
				url: "#",
				data: {del: del},
				success: function(data) {
					document.location.href = "/index.php/panel/products";
				}
			});
		});

		$('.add_product').click(function() {
			document.location.href = "/index.php/panel/product/new";
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