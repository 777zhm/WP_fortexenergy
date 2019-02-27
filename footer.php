</main>

<footer class="footer">
	<div class="container">
		<div class="row justify-content-between align-items-center">
			<div class="logotype col-md-2 col-sm-6 col-6">
				<?php if ( has_custom_logo() ) : the_custom_logo(); endif; ?>	
			</div>
			<div class="main_menu col-md-10 d-none d-lg-block">
				<?php wp_nav_menu( array('theme_location' => 'footer_menu') ); ?>
			</div>
		</div>
	</div>
</footer>
<div class="backtotop_button"></div>

<!-- Start Modal -->
<div class="modal fade" id="consultationModal" tabindex="-1" role="dialog" aria-labelledby="consultationModal" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
	
			<form class="contact_form">
				<div class="modal-header">
					<h4 class="modal-title"><span class="down_arrow_box"><img src="<?php assets_url('img/down_arrow.png') ?>" alt="down_arrow"></span> Консультація</h4>
				</div>
				<div class="modal-body">
					<input type="text" class="form-control" placeholder="ЄДРПОУ" name="useredrpou" required>
					<input type="email" class="form-control" placeholder="Електронна адреса" name="useremail" required>
					<input type="tel" class="form-control" placeholder="Телефон" name="usertelephone" required>
					<button type="submit" class="btn_filled modal_button_submit">Зробити запит</button>
				</div>
			</form>

		</div>
	</div>
</div>
<!-- End Modal -->

<?php wp_footer(); ?>
</body>
</html>