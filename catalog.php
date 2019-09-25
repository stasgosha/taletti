<?php $header_class = 'white' ?>
<?php $page_title = 'Каталог продукции'; ?>
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

		<?php include('page-parts/catalog-section.inc.php'); ?>

		<section class="text-with-image-section big-bottom-padding">
			<div class="container">
				<div class="section-caption no-decoration text-left">
					<h3 class="sc-title">Кондитерская упаковка Taletti</h3>
				</div>
				<div class="section-inner">
					<div class="section-content tpg">
						<p>Наша компания является частью торгово-производственного альянса на территории России, в который входят компании TALETTI , BENDERSITALIA SRL , BENDERS RUSSIA , объединяющего поставки сырья из жиростойких материалов на основе бумаги и картона от мировых лидеров отрасли: NORDIC PAPER и METSA TISSUE. </p>
						<p>Продукция компании направлена в первую очередь на кондитерские и хлебопекаренные предприятия, ориентированные как на массовое производство, так и на эксклюзивную продукцию, требующую особого внимания к процессу изготовления, оформления и упаковки объединяющего поставки сырья из жиростойких материалов на основе бумаги и картона от мировых лидеров.</p>
					</div>
					<div class="section-image">
						<img src="img/about-pack-image.png" alt="">
						<p class="tpg-body-1">Интересный факт о кондитерской упаковке компании Taletti</p>
					</div>
				</div>
			</div>
		</section>

		<?php include('page-parts/why-we-section.inc.php'); ?>

		<?php $certs_big_paddings = true; ?>
		<?php include('page-parts/certs-section.inc.php'); ?>

		<?php include('page-parts/how-we-work-section.inc.php'); ?>

		<?php $manufacture_big_paddings = true; ?>
		<?php include('page-parts/manufacture-section.inc.php'); ?>
	</div>
<?php include('footer.php'); ?>