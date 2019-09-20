<?php
	if (!isset($page_title)) {
		$page_title = 'Заголовок страницы';
	}

	if (!isset($header_class)) {
		$header_class = '';
	}
?>

<!DOCTYPE html>
<html lang="ru"><!-- bloginfo('language') -->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?= $page_title ?> - Talleti</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
	<link rel="stylesheet" href="css/main.css">
	<?php //wp_head(); ?>
</head>
<body>
	<div class="wrapper push">
		<div class="page">
			<header class="header <?= $header_class ?>">
				<div class="container">
					<div class="header-row first">
						<div class="header-block">
							<div class="header-actions-list">
								<div class="item">
									<div class="language-select">
										<div class="select-icon">
											<i class="icon-world"></i>
										</div>
									</div>
								</div>
								<div class="item">
									<a href="#" target="_blank">
										<i class="icon-instagram"></i>
									</a>
								</div>
								<div class="item">
									<div class="search-trigger">
										<i class="icon-search"></i>
									</div>
								</div>
							</div>
						</div>
						<div class="header-block">
							<a href="index.php" class="logo-block">
								<img src="img/logo.png" alt="" class="hide-on-sticky">
								<img src="img/logo-dark.png" alt="" class="on-sticky">
								<!-- <video loop autoplay src="img/taletti_logo.mp4" type="video/mp4" muted>
									<source src="img/taletti_logo.ogg" type="video/ogg">
									<source src="img/taletti_logo.webm" type="video/webm">
								</video> -->
							</a>
						</div>
						<div class="header-block">
							<a href="tel:84957097810" class="phone-link">
								<i class="icon-phone"></i>
								<span>8 (495) 709-78-10</span>
							</a>
						</div>
					</div>
					<div class="header-row second">
						<div class="header-block">
							<ul class="top-nav">
								<li><a href="about.php">О компании</a></li>
								<li><a href="catalog.php">Продукция</a></li>
								<li><a href="delivery.php">Доставка и оплата</a></li>
								<li><a href="news.php">Новости</a></li>
								<li><a href="dealers.php">Дилеры</a></li>
								<li><a href="faq.php">FAQ</a></li>
								<li><a href="contacts.php">Контакты</a></li>
							</ul>
						</div>
						<div class="header-block">
							<button class="btn btn-light btn-white">Заказать звонок</button>
						</div>
					</div>
				</div>
			</header>