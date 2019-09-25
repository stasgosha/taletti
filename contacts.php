<?php $header_class = 'white' ?>
<?php $page_title = 'Контакты'; ?>
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

		<section class="contacts-map-section">
			<div class="container">
				<div class="section-caption">
					<h1 class="sc-title"><?= $page_title ?></h1>
				</div>
			</div>
			<div class="contacts-map">
				<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A8d828896b1d925704c938436b7afccc616652bf2835f2b0793dca45d0e2bd174&amp;width=100%25&amp;height=410&amp;lang=ru_RU&amp;scroll=true"></script>
			</div>
		</section>

		<section class="contacts-list-section">
			<div class="container">
				<div class="contacts-list">
					<div class="item">
						<div class="item-icon">
							<i class="icon-location big"></i>
						</div>
						<div class="item-text tpg">
							<p>ООО «Талетти» <br>121357 г. Москва ул. Верейская д.5 <br>(УМ-7 склад "Талетти")</p>
						</div>
					</div>
					<div class="item">
						<div class="item-icon">
							<i class="icon-email big"></i>
						</div>
						<div class="item-text tpg">
							<p>Для почтовой корреспонденции: <br>105082 г. Москва ул. Большая <br>Почтовая д.36 стр.10</p>
						</div>
					</div>
					<div class="item">
						<div class="item-icon">
							<i class="icon-phone big orange"></i>
						</div>
						<div class="item-text tpg">
							<p>Телефон: <a href="tel:+74954431730">+7 495 443 1730</a>, <a href="tel:+74957793876">+7 495 779 3876</a> 
								<br>Факс: +7 495 443 1730 
								<br>E-mail: <a href="mailto:info@taletti.ru">info@taletti.ru</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="text-with-image-section big-bottom-padding">
			<div class="container">
				<div class="section-inner">
					<div class="section-content">
						<h3 class="tpg-h3">Схема проезда</h3>
						<div class="locations-list">
							<div class="item">
								<div class="item-caption">
									<i class="icon-metro"></i>
									<p>«Кунцевская»</p>
								</div>
								<div class="item-text tpg">
									<p>выход в город из второго хвостового вагона со стороны центра, далее автобусом №733 или №255 до остановки «Аминьево».</p>
								</div>
							</div>
							<div class="item">
								<div class="item-caption">
									<i class="icon-metro"></i>
									<p>«Славянский бульвар»</p>
								</div>
								<div class="item-text tpg">
									<p>выход в город из хвостового вагона со стороны центра в сторону Кутузовского проспекта, далее по подземному переходу под проспектом к улице Славянский бульвар. Затем автобусом №104 или №732 до остановки «Аминьево».</p>
								</div>
							</div>
						</div>
					</div>
					<div class="section-image with-top-radius">
						<img src="img/section-images/drive-path.jpg" alt="">
					</div>
				</div>
			</div>
		</section>

		<?php include('page-parts/order-section.inc.php') ?>
	</div>
<?php include('footer.php'); ?>