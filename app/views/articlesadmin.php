<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="keywords" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Админ</title>
	<!-- <link rel="stylesheet" href="../css/libs.min.css"> -->
	<link rel="stylesheet" href="../css/main.css">
	
</head>
<body>
	<?php 
	require "_header.php"; 
	?>

	<section class="articles bg_articles">
		<div class="container mn">
			<div class="articles-wrapper__adm">

				<form  class="form-ins" name="form1" method="post" action="" >
					<label>Title
						<input type="text" value="" id="txttitleins"  autofocus required></input>
					</label>

					<label >Text
						<textarea class="form-item" name="content" id="txttextins"  required></textarea>
					</label>
					<input type="button" id="but1" value="insert" onclick="ins();">	
				</form>

				<div id="dist_date"></div>

			</div>
		</div>
	</section>
	<!-- scripts -->
	<script src="/js/com.js"></script>

</body>
</html>