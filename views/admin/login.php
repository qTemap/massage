<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script type="text/javascript" src="/template/js/jquery-1.11.0.min.js"></script>
	<script src="/template/js/new.js"></script>
	<script>

		var login = prompt('Введите логин');

		if(login != '') {
			$.ajax({
				type: "POST",
				url: "#",
				data: {login: login},
				success: function(data) {
					if(data == "Login") {
						var password = prompt('Введите пароль');
						if(password != '') {
							$.ajax({
								type: "POST",
								url: "#",
								data: {password: password},
								success: function(data) {
									if(data == "Password") {
										alert("Добро пожаловать, администратор Артём!");
										document.location.href = "/index.php/panel";
									} else {
										document.location.href = "/index.php/news";
									}
								}
							});
						}
					} else {
						document.location.href = "/index.php/news";
					}
				}
			});
		}
	
	</script>
	<link rel="stylesheet" href="/template/css/style_admin.css">
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

	<div class="content">
		<div class="all_product">Просмиотр всей продукции</div>
		<div class="all_title">Просмотр всех категорий</div>
		<div class="all_orders">Просмотр всех заказов</div>
	</div>



<div class="footer">
			
		</div>

</body>
</html>