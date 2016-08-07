<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<link rel="stylesheet" href="/template/css/style_admin_order.css">
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

		<input type="button" value="Все заказы" class="all_orders">
				<div id="news">
				<div id="order">
					<div class="img"><img src='<?php echo $orderItem['img_1']; ?>'></div>
					<div class="id">Номер заказа: <?php echo $orderItem['id']; ?></div>
					<div class="product_name">Название продукции: <?php echo $orderItem['title']; ?></div>
					<div class="user_name">Имя заказчика: <?php echo $orderItem['user_name']; ?></div>					
					<div class="user_tel">Телефон: <?php echo $orderItem['user_tel']; ?></div>
					<div class="price">Цена данного заказа: <?php echo $orderItem['price']; ?></div>

				</div>	
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
			$.ajax({
				type: "POST",
				url: "#",
				data: {update: "update", text : text, title: title, short_content: short_content, rang: rang },
				success: function() {
					
				}
			});
		});

		$('.all_orders').click(function() {
			document.location.href = "/index.php/panel/orders";
		});

	</script>
</html>