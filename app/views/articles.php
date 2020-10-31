<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="keywords" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Главная</title>
	<!-- <link rel="stylesheet" href="css/libs.min.css"> -->
	<link rel="stylesheet" href="css/main.css">
	
</head>
<body>
	<?php 
	require "_header.php"; 
	?>

	<section class="articles bg_articles">
		<div class="container mn">
			<div class="articles-wrapper">

				<?php foreach ($articles as $a):?>

					<div class="article">
						<a href="article.php?id=<?php echo $a['id']?>">
							<span class="art_date"><?php echo $a['date'] ?></span>

							<div class="art_title"><?php echo $a['title'] ?></div>
							
							<div class="art_text"><?php echo article_intro($a['text']) ?></div>
						</a>
					</div>
				<?php endforeach ?>

			</div>
		</div>
	</section>
	<section class="pag">
		<div class="container">
			<nav aria-label="Page navigation">
				<ul class="pagination">

					<?php if($curpage != $startpage){ ?>
					<li class="page-item">
						<a class="page-link" href="?page=<?php echo $startpage ?>" tabindex="-1" aria-label="Previous">
							<span class="sr-only">First</span>
						</a>
					</li>
					<?php } ?>

					<?php if($curpage >= 2){ ?>
					<li class="page-item"><a class="page-link" href="?page=<?php echo $previouspage ?>"><?php echo $previouspage ?></a></li>
					<?php } ?>

					<li class="page-item active"><a class="page-link" href="?page=<?php echo $curpage ?>"><?php echo $curpage ?></a></li>

					<?php if($curpage != $endpage){ ?>
					<li class="page-item"><a class="page-link" href="?page=<?php echo $nextpage ?>"><?php echo $nextpage ?></a></li>
					<li class="page-item">
						<a class="page-link" href="?page=<?php echo $endpage ?>" aria-label="Next">
							
							<span class="sr-only">Last</span>
						</a>
					</li>
					<?php } ?>
					
				</ul>
			</nav>

		</div>
	</section>

</body>
</html>