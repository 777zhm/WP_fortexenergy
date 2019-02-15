<?php /* Template Name: Mainpage ukr Template */ ?>
<?php get_header(); ?>

<section class="heroscreen" style="background-image: url(<?php assets_url('img/bg_sky.jpg') ?>);">
	<div class="container-fluid">
		<div class="row justify-content-center fadein_box">
			<div class="col-sm-12 hero_text_box">
				<h1 class="align-middle">Fortex Energy - Ваш надійний партнер</h1>
				<p>Постачальник енергоносіїв, що розуміє потреби споживачів</p>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="form_section" id="form">
		<div class="container">

			<div class="row">
				<div class="col-lg-7 col-md-6 equal">
					<div class="contact_form_box_2">   
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic eius commodi consequatur asperiores, eaque ullam, recusandae, culpa at omnis voluptate saepe. Quae odio obcaecati placeat doloribus veritatis adipisci, sint quos!</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic eius commodi consequatur asperiores, eaque ullam, recusandae, culpa at omnis voluptate saepe. Quae odio obcaecati placeat doloribus veritatis adipisci, sint quos!</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic eius commodi consequatur asperiores, eaque ullam, recusandae, culpa at omnis voluptate saepe. Quae odio obcaecati placeat doloribus veritatis adipisci, sint quos!</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic eius commodi consequatur asperiores, eaque ullam, recusandae, culpa at omnis voluptate saepe. Quae odio obcaecati placeat doloribus veritatis adipisci, sint quos!</p>
					</div>
				</div>
				<div class="col-lg-5 col-md-6 equal">     
					<div class="contact_form_box">
						<form id="contact_form" action="" method="post" class="contact_form">
							<div class="row justify-content-center">
								<div class="col-lg-9 col-10">
									<h3 class="text-center">Отримайте персональну консультацію</h3>
								</div>
								<div class="col-lg-9 col-10">
									<input type="text" class="form-control" id="user_name" name="user_name" placeholder="ЄДРПОУ" required>
								</div>
								<div class="col-lg-9 col-10">
									<input type="email" class="form-control" id="user_email" name="user_email" placeholder="Електронна адреса" required>
								</div>
								<div class="col-lg-9 col-10">
									<input type="email" class="form-control" id="user_email" name="user_email" placeholder="Телефон" required>
								</div>
								<div class="col-lg-9 col-10 submit_button_box">
									<button type="submit" class="base_btn">Зробити запит</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="change_suplier">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 change_heading">
				<h2>Як змінити постачальника енергоносіїв?</h2>
				<p>Ви можете отримати кращі тарифи</p>
			</div>
			<div class="col-6 change_bottom">
				<button class="base_btn">Дізнатись тариф</button>
			</div>
			<div class="col-6 change_bottom">
				<button class="base_btn">Замовити консультацію</button>
			</div>
			
		</div>
	</div>
</section>

<section>
	<div class="container">
		<div class="row justify-content-center ">
			<div class="col-lg-12">
				<div class="partners partners_slider">
					<div class="partner_item">
						<img class="img img-fluid" src="<?php assets_url('img/partners/logo-arcelor.png') ?>" alt="arcelor" />			
					</div>
					<div class="partner_item">
						<img class="img img-fluid" src="<?php assets_url('img/partners/terrafood-logo.png') ?>" alt="terrafood" />		
					</div>
					<div class="partner_item">
						<img class="img img-fluid" src="<?php assets_url('img/partners/komo-logo.png') ?>" alt="komo" />			
					</div>
					<div class="partner_item">
						<img class="img img-fluid" src="<?php assets_url('img/partners/galicia-logo.png') ?>" alt="galicia" />				
					</div>
					<div class="partner_item">
						<img class="img img-fluid" src="<?php assets_url('img/partners/kamelia-logo.png') ?>" alt="kamelia" />				
					</div>
					<div class="partner_item">
						<img class="img img-fluid" src="<?php assets_url('img/partners/gavtkurch-logo.png') ?>" alt="gavtkurch" />			
					</div>
					<div class="partner_item">
						<img class="img img-fluid" src="<?php assets_url('img/partners/logo-pankurchak.png') ?>" alt="pankurchak" />		
					</div>
					<div class="partner_item">
						<img class="img img-fluid" src="<?php assets_url('img/partners/logo-volin.jpg') ?>" alt="volin" />					
					</div>
					<div class="partner_item">
						<img class="img img-fluid" src="<?php assets_url('img/partners/logo-spetstechno.png') ?>" alt="spetstechno" />		
					</div>

					<div class="partner_item">
						<img class="img img-fluid" src="<?php assets_url('img/partners/cheaseclub-logo.png') ?>" alt="cheaseclub" />		
					</div>
					
					<div class="partner_item">
						<img class="img img-fluid" src="<?php assets_url('img/partners/logo-buchach.png') ?>" alt="buchach" />				
					</div>
					<div class="partner_item">
						<img class="img img-fluid" src="<?php assets_url('img/partners/logo-gitomir.png') ?>" alt="gitomir" />				
					</div>
					<div class="partner_item">
						<img class="img img-fluid" src="<?php assets_url('img/partners/logo-rsz.png') ?>" alt="rsz" />					
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>