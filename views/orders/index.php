<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<link rel="stylesheet" href="/template/css/style_order.css">
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

				<?php foreach ($orderList as $orderItem): ?>
				<div id="order">
					<div class="img"><img src='<?php echo $orderItem['img_1']; ?>'></div>
					<div class="id">Номер заказа: <?php echo $orderItem['id']; ?></div>
					<div class="product_name">Название продукции: <?php echo $orderItem['title']; ?></div>
					<div class="user_name">Имя заказчика: <?php echo $orderItem['user_name']; ?></div>					
					<div class="user_tel">Телефон: <?php echo $orderItem['user_tel']; ?></div>
					<div class="price">Цена данного заказа: <?php echo $orderItem['price']; ?></div>

				</div>
			<?php endforeach; ?>

		</div>

		<?php require_once ROOT.'/views/footer.php'; ?>
	</body>

	<script>

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