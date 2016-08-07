<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="alternate" hreflang="ua" href="https://housemassage.herokuapp.com" />
	<meta name="google-site-verification" content="rds7nH1lw7307eRCsNZdzg7gwhI64RTL-QPhx9ieDKg" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="/template/css/style_massage.css">
	<script type="text/javascript" src="jquery-1.11.0.min.js"></script>
</head>
<body>
	<div class="header">
		<div class="menu">
			<ul>
				<a href="type_massage.php"><li>Виды массажа</li></a>
				<a href="price.php"><li>Цены</li></a>
				<a href="contacts.php"><li>Контакты</li></a>
				
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

<?php 

// $url=parse_url(getenv("CLEARDB_DATABASE_URL"));

//     $server = $url["host"];
//     $username = $url["user"];
//     $password = $url["pass"];
//     $db = substr($url["path"],1);
//  	$conn = mysqli_connect($server, $username, $password);


//     mysqli_select_db($db,$conn);


	// require 'cook.php';

	// $result = DB :: $dbh->query('SELECT * FROM massage ');

	// while ($info = $result->fetch()) {
	// 	echo $info['id']."<br>";
	// 	echo $info['name']."<br>";
	// }

// 	$result = mysql_query('SELECT * FROM massage ');
// 	echo mysql_fetch_array($result);
	// while($row = mysql_fetch_array($result)) {
	// 	echo $row['id'];
	// 	echo $row['name'];
	// }

?>