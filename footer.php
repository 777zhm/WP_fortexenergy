</main>

<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<p></p>
			</div>
		</div>
	</div>
</footer>
<div class="backtotop_button"></div>

<!-- Start Modal Form -->
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
<!-- End Modal Form -->
<!-- Start Modal Dispute -->
<div class="modal fade" id="disputeModal" tabindex="-1" role="dialog" aria-labelledby="disputeModal" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Вирішення спорів</h4>
				<button type="button" class="close_modal" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				<p>У випадку виникнення будь-яких спірних питань, будь ласка, звертайтеся за адресою: 04080, м. Київ, вул. Новокостянтинівська, буд. 18, поверх 1, оф. 1, з вівторка по четвер з 14:00 до 17:00, за телефоном +38 (044) 228 96 01.</p>
				<p>Особа, відповідальна за врегулювання спорів та суперечок: <strong>Директор Момот Олександр Павлович</strong>.</p>
			</div>
		</div>
	</div>
</div>
<!-- End Modal Dispute -->

<?php wp_footer(); ?>
</body>
</html>