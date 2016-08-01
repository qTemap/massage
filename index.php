<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="alternate" hreflang="ua" href="https://housemassage.herokuapp.com" />
	<meta name="google-site-verification" content="rds7nH1lw7307eRCsNZdzg7gwhI64RTL-QPhx9ieDKg" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="style_massage.css">
	<script type="text/javascript" src="jquery-1.11.0.min.js"></script>
</head>
<script>
	$.ajax({
			type: "POST",
			url: "server.php",
			data: {fun: "type"},
			success: function(fun) {
				if(fun == "Mobile") {
					alert(fun);
					$('link[rel=stylesheet]').remove();
				    var link = document.createElement("link");
				    link.setAttribute("rel", "stylesheet");
				    link.setAttribute("type", "text/css");
				    link.setAttribute("href", "mobile.css");
				    document.getElementsByTagName("head")[0].appendChild(link);
				} 
			}
		});
			
	</script>
<body>
	<div class="header">
		<div class="menu">
			<ul>
				<a href="type_massage.php"><li>Виды массажа</li></a>
				<a href="price.php"><li>Цены</li></a>
				<a href="contacts.php"><li>Контакты</li></a>
				<?php 
					require_once('/database.php');

					$result = DB :: $dbh->queryFetch('SELECT * FROM `massage` ');

					while($row = $result->fetch()) {
						echo $row['id'];
						echo $row['name'];
					}
				?>
			</ul>
		</div>
	</div>
</body>
	<script>
			var width = $(window).width();
			var height = $(window).height();
			$('.header').css({'width':width,'height':height});
	</script>
</html>