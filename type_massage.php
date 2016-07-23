<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="style2_massage.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<script type="text/javascript" src="jquery-1.11.0.min.js"></script>
</head>
<body>
	<div id="head" class="header">
		<div class="menu">
			<ul>
				<a href="index.php"><li>Главная</li></a>
			</ul>
		</div>
	</div>
	<div class="list_massage">
		<ul>
			<a href="#1"><li>Классический</li></a>
			<a href="#2"><li>Антицеллюлитный</li></a>
			<a href="#3"><li>Лимфодренажный</li></a>
			<a href="#4"><li>Нейроседативный(релакс)</li></a>
			<a href="#5"><li>Массаж лица</li></a>
			<a href="#6"><li>Тайский традиционный</li></a>
			<a href="#7"><li>Тайский foot массаж</li></a>
			<a href="#8"><li>Тайский массаж Ток Сен</li></a>
			<a href="#9"><li>Китайский лечебный массаж гуаша</li></a>
			<a href="#10"><li>Лечебный массаж</li></a>
		</ul>
	</div>
	<div class="content">
		<div id="1" class="massage">
			<div class="name">
				Классический
			</div>
			<div class="fotos">
				<img src="foto/hd-shutterstock-129747716-37.jpg" alt="">
			</div>
			<div class="text">

			</div>	
		</div>

		<div id="2" class="massage">
			<div class="name">
				Антицеллюлитный
			</div>
			<div class="fotos">
				
			</div>
			<div class="text">
				
			</div>	
		</div>

		<div id="3" class="massage">
			<div class="name">
				Лимфодренажный
			</div>
			<div class="fotos">
				
			</div>
			<div class="text">
				
			</div>	
		</div>

		<div id="4" class="massage">
			<div class="name">
				Нейроседативный(релакс)
			</div>
			<div class="fotos">
				
			</div>
			<div class="text">
				
			</div>	
		</div>

		<div id="5" class="massage">
			<div class="name">
				Массаж лица
			</div>
			<div class="fotos">
				
			</div>
			<div class="text">
				
			</div>	
		</div>

		<div id="6" class="massage">
			<div class="name">
				Тайский традиционный
			</div>
			<div class="fotos">
				
			</div>
			<div class="text">
				
			</div>	
		</div>

		<div id="7" class="massage">
			<div class="name">
				Тайский foot массаж
			</div>
			<div class="fotos">
				
			</div>
			<div class="text">
				
			</div>	
		</div>

		<div id="8" class="massage">
			<div class="name">
				Тайский массаж Ток Сен
			</div>
			<div class="fotos">
				
			</div>
			<div class="text">
				
			</div>	
		</div>

		<div id="9" class="massage">
			<div class="name">
				Китайский лечебный массаж гуаша
			</div>
			<div class="fotos">
				
			</div>
			<div class="text">
				
			</div>	
		</div>

		<div id="10" class="massage">
			<div class="name">
				Лечебный массаж
			</div>
			<div class="fotos">
				
			</div>
			<div class="text">
				
			</div>	
		</div>

	</div>
</body>
<script>
	//$(document).ready({
		var width = $(window).width();
		width = width/5-9.5;
		$('.list_massage ul li').css({'width':width});
	//});
</script>
</html>