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
					<form action='#' method='POST' enctype=multipart/form-data>
						<div class="title">Название продукции: <input type="text" value="" name="title"></div>
						<div class="short_content">Катигория: 
						<select name="short_content" id="">
							<?php foreach ($categoryList as $caterogeItem): ?>
								<option value="<?php echo $caterogeItem['name']; ?>"><?php echo $caterogeItem['name']; ?></option>
							<?php endforeach; ?>
						</select>
						<div class="rang">Рейтинг: <input type="text" value="" name="rang"></div>
						<div class="img_1"><img id="1" src='' alt=""></div> 
						<div class="img_2"><img id="2" src='' alt=""></div>
						<div class="img_3"><img id="3" src='' alt=""></div>					
						<input type="file" name="pictures[]" id="1" class="Img" />
						<input type="file" name="pictures[]" id="2" class="Img" />
						<input type="file" name="pictures[]" id="3" class="Img" />				
						<div class="text">Описание: <textarea name="text"></textarea></div>
						<div class="price">Минимальная цена: <input type="text" value="" name="price"></div>
						<input type="submit" value="Добавить новый товар" class="add" name="add">
					</form>
				</div>			
		</div>

		<div class="footer">
			
		</div>
	</body>
	<script>

		//$('.add').click(function() {	
			// var title = $('.title input').val();
			// var short_content = $('.short_content input').val();
			// var rang = $('.rang input').val();
			// var text = $('.text textarea').val();
			// $.ajax({
			// 	type: "POST",
			// 	url: "#",
			// 	data: {add: "add", text : text, title: title, short_content: short_content, rang: rang },
			// 	success: function() {
					
			// 	}
			// });
		//});

		$('.all_product').click(function() {
			document.location.href = "/index.php/panel/products";
		});


		function readURL(input,i) {
    		if (input.files && input.files[0]) {

        		var reader = new FileReader();

		        reader.onload = function (e) {
		            $('#'+i).attr('src', e.target.result);
		        };

        		reader.readAsDataURL(input.files[0]);
		    }
		}

		$(".Img").change(function(){
			var i = $(this).attr("id");
		    readURL(this,i);
		});

	</script>
</html>