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
			<br>
			<div class="contacts">Контакты</div><br>
			<div class="we">НАШЕ МЕСТОНАХОЖДЕНИЕ</div><br>
			<div class="map">
				<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
				<div style='overflow:hidden;height:400px;width:1000px;'>
					<div id='gmap_canvas' style='height:400px;width:1000px;'></div>
					<div>
						<small>
							<a href="http://embedgooglemaps.com">embedgooglemaps.com</a>
						</small>
					</div>
					<div>
						<small>
						<a href="http://buyproxies.io/">buy proxy</a>
						</small>
					</div>
					<style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
				</div>
				<script type='text/javascript'>function init_map(){var myOptions = {zoom:15,center:new google.maps.LatLng(48.884600282815846,36.310287977246155),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(48.884600282815846,36.310287977246155)});infowindow = new google.maps.InfoWindow({content:'<strong>Название</strong><br>г. Лозовая ул. Володарского, 24а , Харьковская область, Украина<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
			</div>
			<br>
			<div class="action">ПРИХОДИТЕ, ЗВОНИТЕ, ПИШИТЕ</div><br>
			<div class="addresse">Адрес: <br>
			г. Лозовая ул. Володарского, 24а здание магазина "Мирта"</div><br>
			<div class="email">Email:<br>
			window_lozova@mail.ru</div>
			<br>
			<div class="tel">Телефоны:<br>
			+54654654654654<br>
			+4654646546546</div>
			<br>
			<div class="time">Время работы:<br>
			54165165465</div>
			<div></div>
			<div></div>
		</div>

		<?php require_once ROOT.'/views/footer.php'; ?>
	</body>

	<script>

	</script>

</html>