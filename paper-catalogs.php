<?php $header_class = 'white' ?>
<?php $page_title = 'Каталоги'; ?>
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

		<section class="paper-catalogs-section">
			<div class="container">
				<div class="section-caption">
					<h1 class="sc-title">Каталоги</h1>
				</div>
				<div class="cards-list columns-4 lg-columns-3 sm-columns-2 xs-columns-1">
					<div class="item">
						<div class="paper-catalog-card">
							<div class="card-image">
								<img src="img/tmp/paper-catalog.jpg" alt="">
							</div>
							<a href="#" class="card-name">Каталог Талетти 2017</a>
						</div>
					</div>
					<div class="item">
						<div class="paper-catalog-card">
							<div class="card-image">
								<img src="img/tmp/paper-catalog.jpg" alt="">
							</div>
							<a href="#" class="card-name">Каталог Талетти 2017</a>
						</div>
					</div>
					<div class="item">
						<div class="paper-catalog-card">
							<div class="card-image">
								<img src="img/tmp/paper-catalog.jpg" alt="">
							</div>
							<a href="#" class="card-name">Каталог Талетти 2017</a>
						</div>
					</div>
					<div class="item">
						<div class="paper-catalog-card">
							<div class="card-image">
								<img src="img/tmp/paper-catalog.jpg" alt="">
							</div>
							<a href="#" class="card-name">Каталог Талетти 2017</a>
						</div>
					</div>
					<div class="item">
						<div class="paper-catalog-card">
							<div class="card-image">
								<img src="img/tmp/paper-catalog.jpg" alt="">
							</div>
							<a href="#" class="card-name">Каталог Талетти 2017</a>
						</div>
					</div>
					<div class="item">
						<div class="paper-catalog-card">
							<div class="card-image">
								<img src="img/tmp/paper-catalog.jpg" alt="">
							</div>
							<a href="#" class="card-name">Каталог Талетти 2017</a>
						</div>
					</div>
					<div class="item">
						<div class="paper-catalog-card">
							<div class="card-image">
								<img src="img/tmp/paper-catalog.jpg" alt="">
							</div>
							<a href="#" class="card-name">Каталог Талетти 2017</a>
						</div>
					</div>
					<div class="item">
						<div class="paper-catalog-card">
							<div class="card-image">
								<img src="img/tmp/paper-catalog.jpg" alt="">
							</div>
							<a href="#" class="card-name">Каталог Талетти 2017</a>
						</div>
					</div>
				</div>
				<?php include('page-parts/pagination.inc.php') ?>
			</div>
		</section>

		<?php include('page-parts/rate-quality-section.inc.php') ?>
	</div>
<?php include('footer.php'); ?>