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


<!-- Start Modal Forms -->
<div class="modal fade form_modal" id="consultationModal" tabindex="-1" role="dialog" aria-labelledby="consultationModal" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">		
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title"><span class="down_arrow_box"><img src="<?php assets_url('img/down_arrow.png') ?>" alt="down_arrow"></span>Консультація</h4>
			</div>
			<div class="modal-body">
				<?php if (get_locale() == 'uk'){ ?>
					<?php echo do_shortcode( '[contact-form-7 id="174" title="form_consalting_edrpou_ukr"]' ); ?>
				<?php }elseif (get_locale() == 'en_GB'){ ?>
					<?php echo do_shortcode( '[contact-form-7 id="176" title="form_consalting_edrpou_eng"]' ); ?>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
<!-- End Modal Forms -->
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
				<p>Person responsible for settling disputes:<br><span class="colored_text">Director</span> <strong>Momot Olexandr</strong>.</p>
			</div>
		</div>
	</div>
</div>
<!-- End Modal Dispute ENG -->

<!-- Start Modal Tariffs UKR-->
<div class="modal fade tariffs_modal" id="tariffsModalUkr" tabindex="-1" role="dialog" aria-labelledby="tariffsModalUkr" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Тарифи</h4>
				<button type="button" class="close_modal" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
<p>Вартість природного газу з ресурсу Березня 2019 року, станом на 12.03.19 року:</p>
<p>- При 100% попередплаті – <span class="colored_text">7 900,02 грн</span> за 1000м<sup>3</sup>, у т.ч. ПДВ 20%</p>
<p>- При подекадній оплаті – <span class="colored_text">8 100,00 грн</span> за 1000м<sup>3</sup>, у т.ч. ПДВ 20%</p>
<p>- По факту споживання – <span class="colored_text">8 450,04 грн</span> за 1000м<sup>3</sup>, у т.ч. ПДВ 20%</p>
			</div>
		</div>
	</div>
</div>
<!-- End Modal Tariffs UKR -->
<!-- Start Modal Tariffs ENG-->
<div class="modal fade tariffs_modal" id="tariffsModalEng" tabindex="-1" role="dialog" aria-labelledby="tariffsModalEng" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Tariffs</h4>
				<button type="button" class="close_modal" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
<p>The cost of natural gas from the resource in March 2019, as of 12.03.19:</p>
<p>- 100% advance payment – <span class="colored_text">7 900,02 UAH</span> for 1000м<sup>3</sup>, incl. VAT 20%</p>
<p>- Decade payment – <span class="colored_text">8 100,00 UAH</span> for 1000м<sup>3</sup>, incl. VAT 20%</p>
<p>- Actual consumption – <span class="colored_text">8 450,04 UAH</span> for 1000м<sup>3</sup>, incl. VAT 20%</p>
			</div>
		</div>
	</div>
</div>
<!-- End Modal Tariffs ENG -->

<?php wp_footer(); ?>
</body>
</html>