<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="keywords" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Статья</title>
	<!-- <link rel="stylesheet" href="css/libs.min.css"> -->
	<link rel="stylesheet" href="css/main.css">
	
</head>
<body>
	<?php 
	require "_header.php"; 
	?>
	<section class="articleandcomment bg_articles">
		<div class="container mn">
			<div class="articleandcomment_wrapper">
				
				<div class="article" id="art" name="<?php echo $article['id']; ?>" >
					<span class="art_date"><?php echo $article['date']; ?></span>
					<div class="art_title"><?php echo $article['title']; ?></div>
					<div class="art_text"><?php echo $article['text']; ?></div>
				</div>
			</div>
			<!-- can add a comment datetime -->
			<div class="comments bg_cm">
				<a href="#comment_add__form">Добавить свой комментарий</a>
				<h3>Комментарии</h3>
				<div class="comments_content" id="dist_com">					
				</div>
			</div>

			<div id="comment_add__form" class="bg_cm">
				<h3>Добавить комментарий</h3>
				<div class="form__add_cm">
					<form class="form" method="POST" action="#comment_add__form">
						<div class="form__cm">
							<div class="form__cm_name">
								<input type="text" class="form__control" name="name" id="comments_name" placeholder="Имя" value=""> 
							</div>
							<div class="form__cm_text">
								<textarea id="comments_text" name="text" class="form__control" placeholder="Комментарий..."  required ></textarea>
							</div>
							<div class="form__cm_bt">
								<input type="button" class="form__control bt_green" name="do_post" value="Добавить комментарий" onclick="ins_com();">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

	<!-- scripts -->
	<script src="js/comments.js"></script>

</body>
</html>