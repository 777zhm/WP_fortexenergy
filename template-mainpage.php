<?php /* Template Name: Main page Template */ ?>
<?php get_header(); ?>
<section class="mainscreen">
	<div class="mainscreen_left">
		<div class="">
			<h1>Fortex Energy - ваш партнер</h1>
			<p>Надійний постачальник енергоносіїв споживачам</p>
		</div>
	</div>
	<div class="mainscreen_right">
		<form id="form_mainscreen" class="form_mainscreen">
			<h2>Дізнайтесь персональну ціну на газ</h2>
			<div class="input_box">
				<input id="fi_1" type="text" name="edrpou" placeholder="" data-placeholder="12345678">
				<label for="fi_1" unselectable="on">Введіть ЄДРПОУ</label>
			</div>
			<div class="input_box">
				<input id="fi_2" type="text" name="email"  placeholder="" data-placeholder="your.email@email.com">
				<label for="fi_2" unselectable="on">Введіть електронну адресу</label>
			</div>
			<div class="input_box">
				<input id="fi_3" type="text"  name="phone"  placeholder="" data-placeholder="+380 00 123 5678">
				<label for="fi_3" unselectable="on">Телефон</label>
			</div>
			<button type="submit" class="base_btn">
				<span>Дізнатись ціну</span>
			</button>
		</form>
	</div>
</section>
<?php get_footer(); ?>