<?php $header_class = 'white' ?>
<?php $page_title = 'О компании'; ?>
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

		<section class="about-section">
			<div class="container">
				<div class="section-caption no-decoration">
					<h1 class="sc-title">О компании</h1>
				</div>
				<div class="section-inner">
					<div class="section-image">
						<img src="img/section-images/about-image.png" alt="">
						<p class="tpg-body-1">Используем бумагу и картон от мировых лидеров отрасли</p>
					</div>
					<div class="section-content tpg">
						<p>Наша компания является частью торгово-производственного альянса на территории России, в который входят компании TALETTI , BENDERSITALIA SRL , BENDERS RUSSIA , объединяющего поставки сырья из жиростойких материалов на основе бумаги и картона от мировых лидеров отрасли: NORDIC PAPER и METSA TISSUE. </p>
						<p>Продукция компании направлена в первую очередь на кондитерские и хлебопекаренные предприятия, ориентированные как на массовое производство, так и на эксклюзивную продукцию, требующую особого внимания к процессу изготовления, оформления и упаковки.</p>
					</div>
				</div>
				<div class="stats-list">
					<div class="item">
						<div class="item-value" data-value="15">15</div>
						<div class="item-text">лет на рынке упаковки</div>
					</div>
					<div class="item">
						<div class="item-value" data-value="74">74</div>
						<div class="item-text">единиц оборудования</div>
					</div>
					<div class="item">
						<div class="item-value" data-value="32">32</div>
						<div class="item-text">партнера по всему миру</div>
					</div>
					<div class="item">
						<div class="item-value" data-value="47">47</div>
						<div class="item-text">метров упаковки в секунду</div>
					</div>
					<div class="item">
						<div class="item-value" data-value="28">28</div>
						<div class="item-text">лет на рынке упаковки</div>
					</div>
				</div>
		</section>

		<section class="text-with-image-section">
			<div class="container">
				<div class="section-inner">
					<div class="section-content tpg">
						<h3>Мы заботимся о еде, <br>которую вы едите</h3>
						<p>Продукция компании направлена в первую очередь на кондитерские и хлебопекаренные предприятия, ориентированные как на массовое производство, так и на эксклюзивную продукцию, требующую особого внимания к процессу изготовления, оформления и упаковки.</p>
						<p>С математической точки зрения гравитационная сингулярность является множеством особых точек решения уравнений Эйнштейна. Однако при этом необходимо строго отличать так называемую «координатную сингулярность» от истинной гравитационной. Координатные сингулярности возникают тогда, когда принятые для решения уравнений.</p>
					</div>
					<div class="section-image with-corner with-radius">
						<img src="img/section-images/food-image.jpg" alt="">
					</div>
				</div>
			</div>
		</section>

		<section class="certs-section big-bottom-padding">
			<div class="container">
				<div class="section-inner">
					<div class="section-slider">
						<div class="certs-slider">
							<div class="slide">
								<a href="#" class="cert-link">
									<img src="img/tmp/cert.png" alt="">
								</a>
							</div>
							<div class="slide">
								<a href="#" class="cert-link">
									<img src="img/tmp/cert.png" alt="">
								</a>
							</div>
							<div class="slide">
								<a href="#" class="cert-link">
									<img src="img/tmp/cert.png" alt="">
								</a>
							</div>
							<div class="slide">
								<a href="#" class="cert-link">
									<img src="img/tmp/cert.png" alt="">
								</a>
							</div>
						</div>
						<div class="flex-end">
							<a href="#" class="btn btn-light">Все сертификаты</a>
						</div>
					</div>
					<div class="section-info">
						<div class="section-text tpg">
							<p>Продукция компании направлена в первую очередь на кондитерские и хлебопекаренные предприятия, ориентированные как на массовое производство, так и на эксклюзивную продукцию, требующую особого внимания к процессу изготовления. Вселенной в определённый момент времени в прошлом, когда плотность энергии </p>
						</div>
						<div class="advantages-list">
							<div class="item">
								<div class="item-icon">
									<img src="img/big-icons/spoon.png" alt="">
								</div>
								<div class="item-text tpg">
									<p>Безопасный контакт с пищей</p>
								</div>
							</div>
							<div class="item">
								<div class="item-icon">
									<img src="img/big-icons/gost.png" alt="">
								</div>
								<div class="item-text tpg">
									<p>Соответсвие ГОСТУ</p>
								</div>
							</div>
							<div class="item">
								<div class="item-icon">
									<img src="img/big-icons/clock.png" alt="">
								</div>
								<div class="item-text tpg">
									<p>Продлевает срок годности</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<?php include('page-parts/why-we-section.inc.php'); ?>

		<section class="text-with-image-section big-top-padding">
			<div class="container">
				<div class="section-inner">
					<div class="section-content tpg">
						<h3>Экологичность</h3>
						<p>Вся наша упаковка является возобновляемой, перерабатываемой и биоразлагаемой. И она может идти прямо из морозильник в микроволновую печь или обычную духовку. С математической точки зрения гравитационная сингулярность является множеством особых точек решения уравнений Эйнштейна. Однако при этом необходимо строго отличать так называемую координатную сингулярность.</p>
						<p>От истинной гравитационной координатные сингулярности возникают тогда, когда принятые для решения уравнений Эйнштейна координатные условия оказываются неудачными, так что, например, сами принятые координаты становятся многозначными (координатные линии пересекаются) или наоборот, не покрывают всего многообразия.</p>
					</div>
					<div class="section-image">
						<img src="img/section-images/ecology.png" alt="">
					</div>
				</div>
			</div>
		</section>

		<section class="brands-section">
			<div class="container">
				<div class="section-caption">
					<h3 class="sc-title">Используем материалы мировых брендов</h3>
				</div>
				<div class="brands-slider slider-default-paddings">
					<div class="slide">
						<img src="img/brands/logo-1.png" alt="">
					</div>
					<div class="slide">
						<img src="img/brands/logo-2.png" alt="">
					</div>
					<div class="slide">
						<img src="img/brands/logo-3.png" alt="">
					</div>
					<div class="slide">
						<img src="img/brands/logo-4.png" alt="">
					</div>
					<div class="slide">
						<img src="img/brands/logo-2.png" alt="">
					</div>
				</div>
			</div>
		</section>

		<section class="text-with-image-section">
			<div class="container">
				<div class="section-inner">
					<div class="section-content tpg">
						<h3>Сотрудничество с Taletti</h3>
						<h4>Бизнес наших постоянных клиентов <br>процветает, попробуйте и вы.</h4>
						<p>Вся наша упаковка является возобновляемой, перерабатываемой и биоразлагаемой. И она может идти прямо из морозильник в микроволновую печь или обычную духовку. С математической точки зрения гравитационная сингулярность является множеством особых точек решения уравнений Эйнштейна. Однако при этом необходимо строго отличать так называемую координатную сингулярность.</p>
						<p>От истинной гравитационной координатные сингулярности возникают тогда, когда принятые для решения уравнений Эйнштейна координатные условия оказываются неудачными, так что, например, сами принятые координаты становятся многозначными (координатные линии пересекаются) или наоборот, не покрывают всего многообразия.</p>
					</div>
					<div class="section-image with-radius">
						<img src="img/section-images/cooperation.png" alt="">
					</div>
				</div>
			</div>
		</section>

		<section class="write-to-ceo-section">
			<div class="container">
				<div class="section-inner">
					<div class="section-content">
						<div class="ceo-block">
							<div class="block-image">
								<img src="img/tmp/ceo.png" alt="">
							</div>
							<div class="block-text tpg">
								<h4>Иван Иванов <br>генеральный директор</h4>
								<p>Наша компания является частью торгово-производственного альянса на территории России, в который входят компании объединяющего поставки сырья</p>
								<div class="signature">
									<img src="img/signature.png" alt="">
								</div>
							</div>
						</div>
					</div>
					<div class="section-form">
						<div class="section-caption no-decoration text-left">
							<h3 class="sc-title">Написать директору</h3>
						</div>
						<form action="#" class="write-to-ceo-form form">
							<div class="form-row">
								<div class="form-cols">
									<div class="form-col">
										<div class="form-field">
											<input type="text" class="input-field" placeholder="Ваше имя">
										</div>
									</div>
									<div class="form-col">
										<div class="form-field">
											<input type="email" class="input-field" placeholder="E-mail">
										</div>
									</div>
								</div>
							</div>
							<div class="form-row">
								<div class="form-field">
									<textarea placeholder="Текст сообщения"></textarea>
								</div>
							</div>
							<div class="form-footer between">
								<div class="agreement">
									<div class="checkbox">
										<input type="checkbox" id="agreement">
										<label for="agreement">Согласен (а) на обработку <br>моих персональных данных</label>
									</div>
								</div>
								<div class="form-send">
									<button type="submit" class="btn">Отправить</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>

	</div>
<?php include('footer.php'); ?>