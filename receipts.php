<?php $header_class = 'white' ?>
<?php $page_title = 'Рецепты'; ?>
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

		<section class="receipts-section">
			<div class="container">
				<div class="section-caption">
					<h1 class="sc-title"><?= $page_title ?></h1>
				</div>
				<div class="big-nav-wrapper">
					<div class="big-nav-opener">
						<div class="bars">
							<div class="bar"></div>
							<div class="bar"></div>
							<div class="bar"></div>
						</div>
						<span>Рубрики</span>
					</div>
					<div class="big-nav-toggle">
						<ul class="big-nav">
							<li><a href="#">Все блюда</a></li>
							<li class="current-menu-item"><a href="#">Закуски</a></li>
							<li><a href="#">Основные блюда</a></li>
							<li><a href="#">Десерты</a></li>
							<li><a href="#">Гарниры</a></li>
							<li><a href="#">Сладкая выпечка</a></li>
							<li><a href="#">Блюда из мяса</a></li>
							<li><a href="#">Блюда из овощей</a></li>
						</ul>
					</div>
				</div>
				<div class="cards-list columns-4 lg-columns-3 sm-columns-2 xs-columns-1">
					<div class="item">
						<div class="news-card with-video with-borders">
							<a href="#" class="card-image">
								<img src="//placeimg.com/600/180/any?v=1<?= rand(1, 10) ?>" alt="">
							</a>
							<div class="card-body">
								<a href="#" class="card-caption">Заголовок новости</a>
								<div class="card-content tpg">
									<p>В производстве упаковочных изделий мы используем сырье из жиростойких материалов</p>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="news-card with-video with-borders">
							<a href="#" class="card-image">
								<img src="//placeimg.com/600/180/any?v=1<?= rand(1, 10) ?>" alt="">
							</a>
							<div class="card-body">
								<a href="#" class="card-caption">Заголовок новости можно в пару строк</a>
								<div class="card-content tpg">
									<p>В производстве упаковочных изделий мы используем сырье из жиростойких материалов</p>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="news-card with-video with-borders">
							<a href="#" class="card-image">
								<img src="//placeimg.com/600/180/any?v=1<?= rand(1, 10) ?>" alt="">
							</a>
							<div class="card-body">
								<a href="#" class="card-caption">Заголовок новости</a>
								<div class="card-content tpg">
									<p>В производстве упаковочных изделий мы используем сырье из жиростойких материалов</p>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="news-card with-video with-borders">
							<a href="#" class="card-image">
								<img src="//placeimg.com/600/180/any?v=1<?= rand(1, 10) ?>" alt="">
							</a>
							<div class="card-body">
								<a href="#" class="card-caption">Заголовок новости</a>
								<div class="card-content tpg">
									<p>В производстве упаковочных изделий мы используем сырье из жиростойких материалов</p>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="news-card with-video with-borders">
							<a href="#" class="card-image">
								<img src="//placeimg.com/600/180/any?v=1<?= rand(1, 10) ?>" alt="">
							</a>
							<div class="card-body">
								<a href="#" class="card-caption">Заголовок новости</a>
								<div class="card-content tpg">
									<p>В производстве упаковочных изделий мы используем сырье из жиростойких материалов</p>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="news-card with-video with-borders">
							<a href="#" class="card-image">
								<img src="//placeimg.com/600/180/any?v=1<?= rand(1, 10) ?>" alt="">
							</a>
							<div class="card-body">
								<a href="#" class="card-caption">Заголовок новости</a>
								<div class="card-content tpg">
									<p>В производстве упаковочных изделий мы используем сырье из жиростойких материалов</p>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="news-card with-video with-borders">
							<a href="#" class="card-image">
								<img src="//placeimg.com/600/180/any?v=1<?= rand(1, 10) ?>" alt="">
							</a>
							<div class="card-body">
								<a href="#" class="card-caption">Заголовок новости</a>
								<div class="card-content tpg">
									<p>В производстве упаковочных изделий мы используем сырье из жиростойких материалов</p>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="news-card with-video with-borders">
							<a href="#" class="card-image">
								<img src="//placeimg.com/600/180/any?v=1<?= rand(1, 10) ?>" alt="">
							</a>
							<div class="card-body">
								<a href="#" class="card-caption">Заголовок новости</a>
								<div class="card-content tpg">
									<p>В производстве упаковочных изделий мы используем сырье из жиростойких материалов</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php include('page-parts/pagination.inc.php') ?>
			</div>
		</section>
	</div>
<?php include('footer.php'); ?>