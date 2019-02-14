</main>

<footer class="footer">
	<div class="container-fluid">
		<div class="row footer_second_row">
			<div class="col-2 footer_logo text-left">
				<?php if ( has_custom_logo() ) : ?>
					<?php the_custom_logo(); ?>
				<?php endif; ?>
			</div>
			<div class="col-md-1 d-none d-md-block">
				<div class="rhomb"></div>	
			</div>
			<div class="col-md-3 footer_address">
				<p><i class="fas fa-map-marker-alt"></i>&nbsp;вул. Жилянська, 75</p>
				<p><i class="fas fa-map-marker-alt hidden_icon"></i>&nbsp;БЦ "Эвразія" (11 поверх)</p>
				<p><i class="fas fa-map-marker-alt hidden_icon"></i>&nbsp;04080, м. Київ</p>
			</div>
			<div class="col-md-2 footer_schedule">
				<p><i class="far fa-clock"></i> &nbsp;Пн-Чт: 09:00 - 18:00</p>
				<p><i class="far fa-clock hidden_icon"></i> &nbsp;Пт: 09.00 - 17.00</p>
				<p><i class="far fa-clock hidden_icon"></i> &nbsp;Обід: 13.00 - 14.00</p>
			</div>
			<div class="col-md-3 footer_tel">
				<p><i class="fas fa-phone"></i>&nbsp;<a href="tel:+380442289601">+38 (044) 228 96 01</a></p>
				<p><i class="far fa-envelope"></i>&nbsp;<a href = "mailto: info@fortexenergy.com">info@fortexenergy.com</a></p>
			</div>
			<div class="col-md-1 d-none d-md-block ">
				<div class="rhomb"></div>	
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>