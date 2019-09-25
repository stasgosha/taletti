<?php $header_class = 'white' ?>
<?php $page_title = 'Страница не найдена'; ?>
<?php include('header.php'); ?>
	<div class="page-content inner-page">
		<section class="breadcrumbs-section">
			<div class="container">
				<ul class="breadcrumbs">
					<li><a href="index.php">Главная</a></li>
					<li><?= $page_title ?></li>
				</ul>
			</div>
		</section>
		
		<section class="page-404-section">
			<div class="container">
				<div class="page-404-content">
					<div class="image">
						<img src="img/404.png" alt="">
					</div>
					<p>Ой, тут должна была быть страница, <br>но что-то пошло не так</p>
					<div class="flex-center">
						<a href="index.php" class="btn btn-light">На главную</a>
					</div>
				</div>
			</div>
		</section>
	</div>
<?php include('footer.php'); ?>