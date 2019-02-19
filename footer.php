</main>

<footer class="footer">
	<div class="container-fluid">
		<div class="row">

			<div class="col-md-3 col-sm-3 footer_logo text-left">
				<?php if ( has_custom_logo() ) : ?>
				<?php
					$custom_logo_id = get_theme_mod( 'custom_logo' );
					$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
				?> 
				<a href="https://fortexenergy.com"><img class="img img-fluid" src="<?php echo $image[0]; ?>" alt="logotype">
				<?php endif; ?></a>
			</div>
			<div class="col-md-6 col-sm-6 main_menu">
				<?php wp_nav_menu( array('theme_location' => 'footer_menu') ); ?>
			</div>
			
		</div>

		<div class="row justify-content-center">

			<div class="col-md-3 col-sm-6 footer_address">
				<p><i class="fas fa-map-marker-alt"></i>&nbsp;вул. Жилянська, 75</p>
				<p><i class="fas fa-map-marker-alt hidden_icon"></i>&nbsp;БЦ "Эвразія" (11 поверх)</p>
				<p><i class="fas fa-map-marker-alt hidden_icon"></i>&nbsp;04080, м. Київ</p>
			</div>
			<div class="col-md-3 col-sm-6 footer_schedule">
				<p><i class="far fa-clock"></i> &nbsp;Пн-Чт: 09:00 - 18:00</p>
				<p><i class="far fa-clock hidden_icon"></i> &nbsp;Пт: 09.00 - 17.00</p>
				<p><i class="far fa-clock hidden_icon"></i> &nbsp;Обід: 13.00 - 14.00</p>
			</div>
			<div class="col-md-3 col-sm-6 footer_tel">
				<p><img class="img telephone_icon" src="<?php assets_url('img/telephone2.png') ?>" alt="telephone">&nbsp;<a href="tel:+380442289601">+38 (044) 228 96 01</a></p>
				<p>&nbsp;<i class="far fa-envelope"></i>&nbsp;&nbsp;<a href = "mailto: info@fortexenergy.com">info@fortexenergy.com</a></p>
			</div>
		
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>