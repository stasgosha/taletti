<?php $header_class = 'white' ?>
<?php $page_title = 'Наши дилеры'; ?>
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

		<section class="our-dealers-section">
			<div class="container">
				<div class="section-caption">
					<h1 class="sc-title"><?= $page_title ?></h1>
				</div>
				<div class="dealers-tabs">
					<ul class="tabs-nav">
						<li data-tab="#moscow">Москва</li>
						<li data-tab="#regions">Регионы</li>
					</ul>
					<div class="tabs-container">
						<div class="tab" id="moscow">
							<div class="cards-list columns-3">
								<div class="item">
									<div class="dealer-card">
										<div class="card-header">
											<div class="card-logo">
												<img src="img/logos/dealer-1.png" alt="">
											</div>
											<div class="card-caption">Global Distribution
												<br>Center</div>
										</div>
										<div class="card-content">
											<ul class="card-info">
												<li>
													<a href="tel:+74957738718">+7 (495) 773-87-18</a>
												</li>
												<li>
													<a href="mailto:clients@gdcentre.ru">clients@gdcentre.ru</a>
												</li>
											</ul>
											<div class="card-link">
												<a href="#" target="_blank">gdcentre.ru</a>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="dealer-card">
										<div class="card-header">
											<div class="card-logo">
												<img src="img/logos/dealer-2.png" alt="">
											</div>
											<div class="card-caption">Супермаркет
												<br>для кондитера</div>
										</div>
										<div class="card-content">
											<ul class="card-info">
												<li>
													<a href="tel:+74957410030">+7 (495) 741-00-30</a>
												</li>
												<li>
													<a href="mailto:6199415@mail.ru">6199415@mail.ru</a>
												</li>
											</ul>
											<div class="card-link">
												<a href="#" target="_blank">vtk-moscow.ru</a>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="dealer-card">
										<div class="card-header">
											<div class="card-logo">
												<img src="img/logos/dealer-3.png" alt="">
											</div>
											<div class="card-caption">Компания <br>Пакград</div>
										</div>
										<div class="card-content">
											<ul class="card-info">
												<li>
													<a href="tel:8212291370">(8212) 29-13-70</a>
												</li>
												<li>
													<a href="mailto:clients@gdcentre.ru">clients@gdcentre.ru</a>
												</li>
											</ul>
											<div class="card-link">
												<a href="#" target="_blank">pakgrad.ru</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab" id="regions">
							<div class="cards-list columns-3">
								<div class="item">
									<div class="dealer-card">
										<div class="card-header">
											<div class="card-logo">
												<img src="img/logos/dealer-1.png" alt="">
											</div>
											<div class="card-caption">Global Distribution
												<br>Center</div>
										</div>
										<div class="card-content">
											<ul class="card-info">
												<li>
													<a href="tel:+74957738718">+7 (495) 773-87-18</a>
												</li>
												<li>
													<a href="mailto:clients@gdcentre.ru">clients@gdcentre.ru</a>
												</li>
											</ul>
											<div class="card-link">
												<a href="#" target="_blank">gdcentre.ru</a>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="dealer-card">
										<div class="card-header">
											<div class="card-logo">
												<img src="img/logos/dealer-2.png" alt="">
											</div>
											<div class="card-caption">Супермаркет
												<br>для кондитера</div>
										</div>
										<div class="card-content">
											<ul class="card-info">
												<li>
													<a href="tel:+74957410030">+7 (495) 741-00-30</a>
												</li>
												<li>
													<a href="mailto:6199415@mail.ru">6199415@mail.ru</a>
												</li>
											</ul>
											<div class="card-link">
												<a href="#" target="_blank">vtk-moscow.ru</a>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="dealer-card">
										<div class="card-header">
											<div class="card-logo">
												<img src="img/logos/dealer-3.png" alt="">
											</div>
											<div class="card-caption">Компания <br>Пакград</div>
										</div>
										<div class="card-content">
											<ul class="card-info">
												<li>
													<a href="tel:8212291370">(8212) 29-13-70</a>
												</li>
												<li>
													<a href="mailto:clients@gdcentre.ru">clients@gdcentre.ru</a>
												</li>
											</ul>
											<div class="card-link">
												<a href="#" target="_blank">pakgrad.ru</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="materials-section triangles-bg">
			<div class="container">
				<div class="section-caption white">
					<h3 class="sc-title">Материалы для рекламы</h3>
				</div>
				<div class="cards-list columns-4">
					<div class="item">
						<div class="material-card">
							<div class="card-icon">
								<img src="img/big-icons/catalog.png" alt="">
							</div>
							<div class="card-content">
								<div class="card-caption">Каталог продукции</div>
								<a href="#" target="_blank" class="card-link">
									<span>PDF, 1.25mb</span>
									<i class="icon-download"></i>
								</a>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="material-card">
							<div class="card-icon">
								<img src="img/big-icons/album.png" alt="">
							</div>
							<div class="card-content">
								<div class="card-caption">Архив фотографий</div>
								<a href="#" target="_blank" class="card-link">
									<span>ZIP, 12mb</span>
									<i class="icon-download"></i>
								</a>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="material-card">
							<div class="card-icon">
								<img src="img/big-icons/price-list.png" alt="">
							</div>
							<div class="card-content">
								<div class="card-caption">Прайс лист</div>
								<a href="#" target="_blank" class="card-link">
									<span>EXL, 1.25mb</span>
									<i class="icon-download"></i>
								</a>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="material-card">
							<div class="card-icon">
								<img src="img/big-icons/catalog.png" alt="">
							</div>
							<div class="card-content">
								<div class="card-caption">Заказать образцы упаковки</div>
								<a href="#" target="_blank" class="card-link"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="want-to-be-a-dealer-section">
			<div class="container">
				<div class="row">
					<div class="col-md-7">
						<div class="tpg">
							<h3>Хотите стать <br>нашим дилером?</h3>
							<p>Краткое описание условий партнерства, оцените качество наших материалов в реальных условиях. Так же небольшое описание что будет входить пробный набор для испытания и на каких условиях это поставляется. Какой срок поставки и какая стоимость.</p>
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
							<img src="img/want-to-be-a-dealer.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
<?php include('footer.php'); ?>