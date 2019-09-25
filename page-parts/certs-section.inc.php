<?php 
	$addClass = '';
	isset($certs_big_paddings) && $certs_big_paddings && $addClass = 'big-paddings';
?>

<section class="certs-section <?= $addClass ?>">
	<div class="container">
		<div class="section-caption">
			<h3 class="sc-title">Сертификаты</h3>
		</div>
		<div class="section-inner">
			<div class="section-slider">
				<div class="certs-slider">
					<div class="slide">
						<a href="img/tmp/cert.png" class="cert-link fancybox" rel="certs">
							<img src="img/tmp/cert.png" alt="">
						</a>
					</div>
					<div class="slide">
						<a href="img/tmp/cert.png" class="cert-link fancybox" rel="certs">
							<img src="img/tmp/cert.png" alt="">
						</a>
					</div>
					<div class="slide">
						<a href="img/tmp/cert.png" class="cert-link fancybox" rel="certs">
							<img src="img/tmp/cert.png" alt="">
						</a>
					</div>
					<div class="slide">
						<a href="img/tmp/cert.png" class="cert-link fancybox" rel="certs">
							<img src="img/tmp/cert.png" alt="">
						</a>
					</div>
				</div>
				<div class="section-button flex-end sm-flex-center">
					<a href="#" class="btn btn-light xs-fullwidth">Все сертификаты</a>
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