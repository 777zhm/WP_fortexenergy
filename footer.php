</main>

<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-3 footer_logo text-left">
				<?php if ( has_custom_logo() ) : the_custom_logo(); endif; ?>
			</div>
			<div class="col-md-9 col-sm-9 main_menu">
				<?php wp_nav_menu( array('theme_location' => 'main_menu') ); ?>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>