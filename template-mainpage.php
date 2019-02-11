<?php /* Template Name: Main page Template */ ?>
<?php get_header(); ?>
<section class="mainscreen">
	<div class="mainscreen_left" style="background-image: url(<?php assets_url('img/bg-1.jpeg') ?>);">
		<div class="">
			<h1>Fortex Energy - ваш надійний партнер</h1>
			<p>Постачальник енергоносіїв, що розуміє потреби споживачів</p>
		</div>
	</div>
	<div class="mainscreen_right">
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
<section class="services">
	<div class="services_item">
		<h2>Кредит на оплату енергоносіїв</h2>
		<p class="services_subheading">Оплатіть за газ в кредит та отримайте ціну попередньої оплати</p>
		<img src="<?php assets_url('img/service_2.svg') ?>" class="service_1" alt="service_1">
		<button class="base_btn">Підключити</button>
	</div>
	<div class="services_item">
		<h2>Зафіксуйте літню ціну</h2>
		<p class="services_subheading">Отримайте газ за літньою ціною на опалювальний сезон з жовтня по березень</p>
		<img src="<?php assets_url('img/service_2.svg') ?>" class="service_2" alt="service_2">
		<button class="base_btn">Зафіксувати ціну</button>
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
<?php get_footer(); ?>