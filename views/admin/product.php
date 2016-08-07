<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<link rel="stylesheet" href="/template/css/style_product.css">
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

		<input type="button" value="Вся продукция" class="all_product">
				<div id="news">
					<div class="id">Номер продукции: <?php echo $productsItem['id']; ?></div>
					<div class="title">Название продукции: <input type="text" value="<?php echo $productsItem['title']; ?>"></div>
					<div class="short_content">Катигория: <input type="text"value="<?php echo $productsItem['short_content']; ?>"></div>
					<div class="rang">Рейтинг: <input type="text" value="<?php echo $productsItem['rang']; ?>"></div>
					<div class="img_1"><img id="1" src='<?php echo $productsItem['img_1']; ?>' alt=""></div> 
					<div class="img_2"><img id="2" src='<?php echo $productsItem['img_2']; ?>' alt=""></div>
					<div class="img_3"><img id="3" src='<?php echo $productsItem['img_3']; ?>' alt=""></div>
					<form action='#' method='POST' enctype=multipart/form-data>
						<input type="file" name="pictures[]" value='<?php echo $productsItem['img_1']; ?>' />
						<input type="file" name="pictures[]" value='<?php echo $productsItem['img_2']; ?>' />
						<input type="file" name="pictures[]" value='<?php echo $productsItem['img_3']; ?>' />
						<input type='submit' class='ok' value='ok' name='ok'>
					</form>
					<div class="text">Описание: <textarea><?php echo $productsItem['text']; ?></textarea></div>
					<div class="price">Минимальная цена: <input type="text" value="<?php echo $productsItem['price']; ?>"></div>
					<input type="button" value="Обновить информацию" class="update_info">
				</div>


		</div>

		<div class="footer">
			
		</div>
	</body>
	<script>

		$('.update_info').click(function() {			
			var title = $('.title input').val();
			var short_content = $('.short_content input').val();
			var rang = $('.rang input').val();
			var text = $('.text textarea').val();
			var price = $('.price input').val();
			$.ajax({
				type: "POST",
				url: "#",
				data: {update: "update", text : text, title: title, short_content: short_content, rang: rang, price: price },
				success: function() {
					
				}
			});
		});

		$('.all_product').click(function() {
			document.location.href = "/index.php/panel/products";
		});

	</script>
</html>