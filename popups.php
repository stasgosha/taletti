<?php $header_class = 'white' ?>
<?php $page_title = 'Попапы'; ?>
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

		<section class="section-default-paddings">
			<div class="container">
				<div class="cards-list xs-columns-1">
					<div class="item">
						<a href="#" class="btn xs-fullwidth" data-toggle="modal" data-target="#modal-order-call">Заказать звонок</a>
					</div>
					<div class="item">
						<a href="#" class="btn xs-fullwidth" data-toggle="modal" data-target="#modal-order-materials">Упаковочные материалы</a>
					</div>
					<div class="item">
						<a href="#" class="btn xs-fullwidth" data-toggle="modal" data-target="#modal-order-examples">Бесплатные образцы</a>
					</div>
					<div class="item">
						<a href="#" class="btn xs-fullwidth" data-toggle="modal" data-target="#modal-order-services">Услуги</a>
					</div>
					<div class="item">
						<a href="#" class="btn xs-fullwidth" data-toggle="modal" data-target="#modal-success">Спасибо</a>
					</div>
				</div>
			</div>
		</section>
	</div>
<?php include('footer.php'); ?>