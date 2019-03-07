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
				<p>У випадку виникнення будь-яких спірних питань, будь ласка звертайтеся за адресою: 02000, м. Київ, вул. Жилянська 75, БЦ "Эвразія" (11 поверх), з вівторка по четвер з 14:00 до 17:00 або за телефоном<br> <a href="tel:+380442289601">+38 (044) 228 96 01</a>.</p>
				<p>Особа, відповідальна за врегулювання спорів та суперечок: <span class="colored_text">Директор</span> <strong>Момот Олександр Павлович</strong>.</p>
			</div>
		</div>
	</div>
</div>
<!-- End Modal Dispute UKR -->
<!-- Start Modal Dispute ENG-->
<div class="modal fade dispute_modal" id="disputeModalEng" tabindex="-1" role="dialog" aria-labelledby="disputeModalEng" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Disputes</h4>
				<button type="button" class="close_modal" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				<p>In case of any disputable issues, please contact:<br> Zhylianska st. 75, Kyiv, business center "Eurasia" (floor 11) from Tuesday to Thursday 14:00 - 17:00 or by phone<br> <a href="tel:+380442289601">+38 (044) 228 96 01</a>.</p>
				<p>Person responsible for settling disputes:<br><span class="colored_text">Director</span> <strong>Momot Alexandr</strong>.</p>
			</div>
		</div>
	</div>
</div>
<!-- End Modal Dispute ENG -->


<?php wp_footer(); ?>
</body>
</html>