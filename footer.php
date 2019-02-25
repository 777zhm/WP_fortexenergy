</main>

<footer class="footer">
	<div class="container">
		<div class="row justify-content-between align-items-center">
			<div class="logotype col-lg-2 col-md-2 col-sm-6 col-6">
				<?php if ( has_custom_logo() ) : the_custom_logo(); endif; ?>	
			</div>
			<div class="main_menu col-lg-9 col-md-8 d-none d-lg-block">
				<?php wp_nav_menu( array('theme_location' => 'main_menu') ); ?>
			</div>
			<div class="back_to_top col-lg-1 col-md-2 col-sm-6 col-6">
				<a href="#top">Вверх</a>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>