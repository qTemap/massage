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
				<div class="title"><?php echo $newsList['title']; ?></div>
					<div class="img"><img src='<?php echo $newsList['img_1']; ?>' alt=""></div>
					<div class="little_img">
						<div class="img_1"><img id="1" src='<?php echo $newsList['img_1']; ?>' alt=""></div>
						<div class="img_1"><img id="2" src='<?php echo $newsList['img_2']; ?>' alt=""></div>
						<div class="img_1"><img id="3" src='<?php echo $newsList['img_3']; ?>' alt=""></div>
					</div>
					
					<div class="short_content"><?php echo $newsList['short_content']; ?></div>
				</div>
		</div>

		<?php require_once ROOT.'/views/footer.php'; ?>
	</body>

	<script>
		$('div.img_1 img').click(function() {
			var src_img = $(this).attr('src');
			$('div.img img').attr('src', src_img);
		});	
	
 	
	</script>

</html>