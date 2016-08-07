<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<link rel="stylesheet" href="/template/css/style_new.css">
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
				<div id="news">
				<div class="title"><?php echo $catalogList['title']; ?></div>
					<div class="img"><img src='<?php echo $catalogList['img_1']; ?>' alt=""></div>
					<div class="little_img">
						<div class="img_1"><img id="1" src='<?php echo $catalogList['img_1']; ?>' alt=""></div>
						<div class="img_1"><img id="2" src='<?php echo $catalogList['img_2']; ?>' alt=""></div>
						<div class="img_1"><img id="3" src='<?php echo $catalogList['img_3']; ?>' alt=""></div>
					</div>
					
					<div class="short_content">Категория: <?php echo $catalogList['short_content']; ?></div>
					<div class="text"><p>Описание: <?php echo $catalogList['text']; ?></p></div>
					<div class="price"><p>Цена: <?php echo $catalogList['price']; ?></p></div>
					<!-- <div class="change">
						<input type="text" id="h">
						<input type="text" class="w">
						<div id="result"></div>
					</div> -->
					<div>Ваше имя: <input type="text"  name="name"> </div>
					<div>Ваш номер телефона: <input type="text"  name="tel"> </div>
					<br>
					<div class="info" align="justify">Сделайте сами заказ, указав обязательно номер телефона и вам перезвонят.
					Или же позвоните сами и уточните всё нужную информацию. 
					Вам могут сообщить всё информацию про любую продукцию и расчитать полную стоимость.</div>
					<div class="info" align="justify">У вас будет возможность выбрать желаемый профиль, стеклопакет, подоконник, отлив и монтаж.</div>
					<input type="button" value="Заказать" id="order">
				</div>



		</div>

		<?php require_once ROOT.'/views/footer.php'; ?>
	</body>

	<script>

	$('#order').click(function() {
		$.ajax({
			type: "POST",
			url: "#",
			data: {order: "id"},
			success: function(order) {
			
			}
		});
	});
		

		$('div.img_1 img').click(function() {
			var src_img = $(this).attr('src');
			$('div.img img').attr('src', src_img);
		});	

		
  // var input = document.getElementById('h');

  // input.oninput = function() {
  //   document.getElementById('result').innerHTML = 3*input.value;
  // };
	</script>

</html>