<?php isset($order_section_top_padding) || $order_section_top_padding = false; ?>
<?php $order_section_top_padding ? $addClass = 'with-top-padding' : $addClass = '' ?>

<section class="order-section <?= $addClass ?>">
	<div class="container">
		<div class="section-inner">
			<div class="section-image">
				<img src="img/backgrounds/order-image.png" alt="">
			</div>
			<div class="section-content">
				<div class="order-caption"><span class="bigger">Заказать</span><br>партию упаковочных материалов</div>
				<form class="order-form form">
					<div class="form-row">
						<div class="form-field">
							<input type="text" class="input-field" placeholder="ФИО">
						</div>
					</div>
					<div class="form-row">
						<div class="form-cols">
							<div class="form-col">
								<div class="form-field">
									<input type="tel" class="input-field" placeholder="Телефон">
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
							<textarea placeholder="Подробнее о вашем заказе"></textarea>
						</div>
					</div>
					<div class="form-footer">
						<div class="agreement">
							<div class="checkbox">
								<input type="checkbox" id="agreement">
								<label for="agreement">Согласен (а) на обработку <br>моих персональных данных</label>
							</div>
						</div>
						<div class="form-send">
							<button type="submit" class="btn xs-fullwidth">Заказать</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>