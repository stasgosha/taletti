<?php $header_class = 'white' ?>
<?php $page_title = 'Логистика'; ?>
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

		<section class="logistic-section">
			<div class="container">
				<div class="section-caption">
					<h1 class="sc-title"><?= $page_title ?></h1>
				</div>
				<div class="section-map">
					<div class="section-map-inner">
						<div class="map-marker moscow">
							<p class="mm-caption">По Москве</p>
							<div class="mm-text tpg">
								<p>Отгрузки за пределы МКАД, а также отгрузки в Московскую область производятся после согласования. При единовременном заказе на сумму от 100000 руб. данная услуга оказывается бесплатно</p>
							</div>
							<p class="mm-price">10 000 <span class="rouble">у</span></p>
							<div class="mm-line"><div class="circle"></div></div>
						</div>
						<div class="map-marker russia">
							<p class="mm-caption">По России</p>
							<div class="mm-text tpg">
								<p>Доставка по россии осуществляется только транспортными компаниями. При единовременном заказе на сумму от 50000 руб. доставка  производится бесплатно</p>
							</div>
							<p class="mm-price">1 500 <span class="rouble">у</span></p>
							<p class="mm-note">экспедирование на транспортные компании</p>
							<div class="mm-line"><div class="circle"></div></div>
						</div>
					</div>
					<div class="section-images">
						<div class="section-boxes">
							<img src="img/logistic/boxes.png" alt="">
						</div>
						<div class="section-cars">
							<img src="img/logistic/cars.png" alt="">
						</div>
					</div>
				</div>
				<div class="section-features cards-list columns-3 md-columns-2 sm-columns-1">
					<div class="item">
						<div class="logistic-feature-card">
							<div class="card-header">
								<div class="card-icon">
									<img src="img/big-icons/boxes.png" alt="">
								</div>
								<div class="card-caption">Минимальный заказ <br>от 20 000 рублей</div>
							</div>
							<div class="card-text tpg">
								<p>При условиях самовывоза отгрузка может производится на следующий день после подтверждения поступления денежных средств. Во всех иных случаях отгрузка осуществляется в течение 3 дней с даты подтверждения заказа</p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="logistic-feature-card">
							<div class="card-header">
								<div class="card-icon">
									<img src="img/big-icons/pickup.png" alt="">
								</div>
								<div class="card-caption">Самовывоз только <br>со склада</div>
							</div>
							<div class="card-text tpg">
								<p>При условиях самовывоза отгрузка может производится на следующий день после подтверждения поступления денежных средств. Во всех иных случаях отгрузка осуществляется в течение 3 дней с даты подтверждения заказа</p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="logistic-feature-card">
							<div class="card-header">
								<div class="card-icon">
									<img src="img/big-icons/no-cash.png" alt="">
								</div>
								<div class="card-caption">Безналичный <br>расчет</div>
							</div>
							<div class="card-text tpg">
								<p>При условиях самовывоза отгрузка может производится на следующий день после подтверждения поступления денежных средств. Во всех иных случаях отгрузка осуществляется в течение 3 дней с даты подтверждения заказа</p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="logistic-feature-card">
							<div class="card-header">
								<div class="card-icon">
									<img src="img/big-icons/contract.png" alt="">
								</div>
								<div class="card-caption">Экпедиторские <br>расписки </div>
							</div>
							<div class="card-text tpg">
								<p>При условиях самовывоза отгрузка может производится на следующий день после подтверждения поступления денежных средств. Во всех иных случаях отгрузка осуществляется в течение 3 дней с даты подтверждения заказа</p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="logistic-feature-card">
							<div class="card-header">
								<div class="card-icon">
									<img src="img/big-icons/eac.png" alt="">
								</div>
								<div class="card-caption">Отгрузка в страны <br>Таможенного Союза</div>
							</div>
							<div class="card-text tpg">
								<p>При условиях самовывоза отгрузка может производится на следующий день после подтверждения поступления денежных средств. Во всех иных случаях отгрузка осуществляется в течение 3 дней с даты подтверждения заказа</p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="logistic-feature-card">
							<div class="card-header">
								<div class="card-icon">
									<img src="img/big-icons/documents.png" alt="">
								</div>
								<div class="card-caption">Выдача груза <br>представителю</div>
							</div>
							<div class="card-text tpg">
								<p>При условиях самовывоза отгрузка может производится на следующий день после подтверждения поступления денежных средств. Во всех иных случаях отгрузка осуществляется в течение 3 дней с даты подтверждения заказа</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<?php include('page-parts/how-we-work-section.inc.php'); ?>

		<section class="transport-companies-section">
			<div class="container">
				<div class="section-caption">
					<h3 class="sc-title">Транспортные компании</h3>
				</div>
				<div class="companies-list">
					<div class="item"><img src="img/companies/del-linii.png" alt=""></div>
					<div class="item"><img src="img/companies/first-exp.png" alt=""></div>
					<div class="item"><img src="img/companies/autotrading.png" alt=""></div>
					<div class="item"><img src="img/companies/baikal.png" alt=""></div>
					<div class="item"><img src="img/companies/reil-continent.png" alt=""></div>
					<div class="item"><img src="img/companies/glavdostavka.png" alt=""></div>
					<div class="item wide">
						<div class="transport-note-block">
							<div class="block-icon">
								<img src="img/big-icons/truck.png" alt="">
							</div>
							<div class="block-text tpg">
								<p>По согласованию Сторон, осуществляются отгрузки и экспедирование товаров на другие транспортные компании г.Москвы</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
<?php include('footer.php'); ?>