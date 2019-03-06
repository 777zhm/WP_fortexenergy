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

<!-- Start Modal Form UKR -->
<div class="modal fade form_modal" id="consultationModalUkr" tabindex="-1" role="dialog" aria-labelledby="consultationModalUkr" aria-hidden="true">
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
<!-- End Modal Form UKR -->
<!-- Start Modal Form ENG -->
<div class="modal fade form_modal" id="consultationModalEng" tabindex="-1" role="dialog" aria-labelledby="consultationModalEng" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
	
			<form class="contact_form">
				<div class="modal-header">
					<h4 class="modal-title"><span class="down_arrow_box"><img src="<?php assets_url('img/down_arrow.png') ?>" alt="down_arrow"></span>Consultation</h4>
				</div>
				<div class="modal-body">
					<input type="text" class="form-control" placeholder="Tax number" name="useredrpou" required>
					<input type="email" class="form-control" placeholder="Email" name="useremail" required>
					<input type="tel" class="form-control" placeholder="Phone" name="usertelephone" required>
					<button type="submit" class="btn_filled modal_button_submit">Make a request</button>
				</div>
			</form>

		</div>
	</div>
</div>
<!-- End Modal Form ENG -->
<!-- Start Modal Dispute UKR -->
<div class="modal fade dispute_modal" id="disputeModalUkr" tabindex="-1" role="dialog" aria-labelledby="disputeModalUkr" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Вирішення спорів</h4>
				<button type="button" class="close_modal" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				<p>У випадку виникнення будь-яких спірних питань, будь ласка, звертайтеся за адресою: 02000, м. Київ, вул. Жилянська, буд. 75, поверх 11, з вівторка по четвер з 14:00 до 17:00, за телефоном +38 (044) 228 96 01.</p>
				<p>Особа, відповідальна за врегулювання спорів та суперечок: <strong>Директор Момот Олександр Павлович</strong>.</p>
			</div>
		</div>
	</div>
</div>
<!-- End Modal Dispute -->
<!-- Start Modal Dispute ENG-->
<div class="modal fade dispute_modal" id="disputeModalEng" tabindex="-1" role="dialog" aria-labelledby="disputeModalEng" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Dispute settlement</h4>
				<button type="button" class="close_modal" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				<p>У випадку виникнення будь-яких спірних питань, будь ласка, звертайтеся за адресою: 02000, м. Київ, вул. Жилянська, буд. 75, поверх 11, з вівторка по четвер з 14:00 до 17:00, за телефоном +38 (044) 228 96 01.</p>
				<p>Особа, відповідальна за врегулювання спорів та суперечок: <strong>Директор Момот Олександр Павлович</strong>.</p>
			</div>
		</div>
	</div>
</div>
<!-- End Modal Dispute -->


<?php wp_footer(); ?>
</body>
</html>