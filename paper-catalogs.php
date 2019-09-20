<?php $header_class = 'white' ?>
<?php $page_title = 'Каталоги'; ?>
<?php include('header.php'); ?>
	<div class="page-content inner-page">
		<section class="breadcrumbs-section">
			<div class="container">
				<ol class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
					<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
						<a itemprop="item" href="index.php">
							<span itemprop="name">Главная</span>
						</a>
						<meta itemprop="position" content="1" />
					</li>
					<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
						<a itemprop="item" href="functional-training.php.php">
							<span itemprop="name"><?= $page_title ?></span>
						</a>
						<meta itemprop="position" content="2" />
					</li>
				</ol>
			</div>
		</section>

		<section class="paper-catalogs-section">
			<div class="container">
				<div class="section-caption">
					<h1 class="sc-title">Каталоги</h1>
				</div>
				<div class="cards-list columns-4">
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

		<section class="rate-quality-section">
			<div class="container">
				<div class="row">
					<div class="col-md-7">
						<div class="tpg">
							<h3>Оцените качество в деталях</h3>
							<p>Закажите бесплатные образцы упаковочных изделий для испытания на своем производстве. Оцените качество наших материалов в реальных условиях.Так же небольшое описание что будет входить пробный набор для испытания и на каких условиях это поставляется. Какой срок поставки и какая стоимость.</p>
						</div>
						<div class="add-request-block">
							<p>Оставьте заявку или позвоните по телефону, наш менеджер свяжется с вами в удобное для вас время</p>
							<div class="block-footer">
								<div class="item">
									<button class="btn">Оформить заявку</button>
								</div>
								<div class="item">
									<a href="tel:84957097810" class="phone-link dark big">
										<i class="icon-phone big"></i>
										<span>8 (495) 709-78-10</span>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-5">
						<div class="section-image">
							<img src="img/rate-quality-image.png" alt="">
							<p class="tpg-body-1">Ключевой факт о кондитерской упаковке компании Taletti</p>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
<?php include('footer.php'); ?>