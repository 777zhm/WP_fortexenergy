<?php /* Template Name: Mainpage ukr Template */ ?>
<?php get_header(); ?>

<section class="heroscreen" style="background-image: url(<?php assets_url('img/bg-2.jpeg') ?>);">
	<div class="container-fluid">
		<div class="row main_photo text-center">
		
				<h1 class="align-middle">Fortex Energy - Ваш надійний партнер</h1>
				<h4>Постачальник енергоносіїв, що розуміє потреби споживачів</h4>

		</div>
	</div>
</section>
<section class="services">
	<div class="services_item">
		<form id="form_mainscreen" class="form_mainscreen">
			<h3>Отримайте персональну консультацію</h3>
			<div class="input_box">
				<input id="fi_1" type="text" name="edrpou" placeholder="" data-placeholder="12345678">
				<label for="fi_1" unselectable="on">ЄДРПОУ</label>
			</div>
			<div class="input_box">
				<input id="fi_2" type="text" name="email"  placeholder="" data-placeholder="your.email@email.com">
				<label for="fi_2" unselectable="on">Електронна адреса</label>
			</div>
			<div class="input_box">
				<input id="fi_3" type="text"  name="phone"  placeholder="" data-placeholder="+380 00 123 5678">
				<label for="fi_3" unselectable="on">Телефон</label>
			</div>
			<button type="submit" class="base_btn">
				<span>Зробити запит</span>
			</button>
		</form>
	</div>
	<div class="services_item">
		<form id="form_mainscreen" class="form_mainscreen">
			<h3>Отримайте персональну консультацію</h3>
			<div class="input_box">
				<input id="fi_1" type="text" name="edrpou" placeholder="" data-placeholder="12345678">
				<label for="fi_1" unselectable="on">ЄДРПОУ</label>
			</div>
			<div class="input_box">
				<input id="fi_2" type="text" name="email"  placeholder="" data-placeholder="your.email@email.com">
				<label for="fi_2" unselectable="on">Електронна адреса</label>
			</div>
			<div class="input_box">
				<input id="fi_3" type="text"  name="phone"  placeholder="" data-placeholder="+380 00 123 5678">
				<label for="fi_3" unselectable="on">Телефон</label>
			</div>
			<button type="submit" class="base_btn">
				<span>Зробити запит</span>
			</button>
		</form>
	</div>
</section>
<section class="change_suplier">
	<div class="change_heading">
		<h2>Як змінити постачальника енергоносіїв?</h2>
		<p>Ви можете отримати кращі тарифи</p>
	</div>
	<div class="change_left">
		<h3>Природний газ</h3>
		<p>Суть пропозиції зі зміни постачальника природного газу</p>
		<p>Перевага перша нашої пропозиції</p>
		<p>Унікальність нашої пропозиції</p>
	</div>
	<div class="change_right">
		<h3>Електроенергія</h3>
		<p>Переваги пропозиції зі зміни постачальника електроенергії</p>
		<p>Перевага перша нашої пропозиції</p>
		<p>Унікальність нашої пропозиції</p>
	</div>
	<div class="change_bottom">
		<button class="base_btn">Замовити консультацію</button>
	</div>
</section>
<section>
      <div class="container">
        <div class="row justify-content-center ">
          <div class="col-lg-10 ">
            <div class="partners partners_slider">
              <div class="partner_item">
                <img src="<?php assets_url('img/partners/cheaseclub-logo.png') ?>" alt="" class="img img-fluid hover ">
                <img src="<?php assets_url('img/partners/cheaseclub-logo-gray.png') ?>" alt="" class="img img-fluid default">
              </div>              
            </div>
          </div>
        </div>
      </div>
    </section>

<?php get_footer(); ?>