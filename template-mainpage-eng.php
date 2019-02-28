<?php /* Template Name: Mainpage eng Template */ ?>
<?php get_header(); ?>

<section class="heroscreen_section" style="background-image: url(<?php assets_url('img/heroscreen_bg.svg') ?>);">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-7">
				<h1>Надійний постачальник<br>енергоносіїв українським та закордонним споживачам</h1>
				<p class="section_subheading">Сучасна енергетична компанія, що розуміє потреби клієнтів</p>
				<button class="btn_filled">Дізнатися тарифи</button>
				<button class="btn_base" type="button" data-toggle="modal" data-target="#consultationModal">Консультація</button>
			</div>
		</div>
	</div>
</section>
<section class="company_section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8 col-lg-8 col-md-10 col-sm-12">
				<h2 class="text-center">Компанія</h2>
				<p class="section_subheading">Стратегічною метою нашої компанії є лідерство серед глобальних енергетичних компаній Європи за допомогою диверсифікації ринків збуту, забезпечення надійності поставок та зростання ефективності діяльності.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 equal">
				<div class="company_item">
					<div class="icon_box">
						<img src="<?php assets_url('img/mission_icon.png') ?>" alt="mission_icon">
					</div>
					<h3>Місія</h3>
					<p>Наша місія полягає в надійному, ефективному і збалансованому забезпеченні споживачів природним газом та енергоносіями.</p>
				</div>	
			</div>
			<div class="col-md-4 equal">
				<div class="company_item">
					<div class="icon_box">
						<img src="<?php assets_url('img/goal_icon.png') ?>" alt="goal_icon">
					</div>
					<h3>Мета</h3>
					<p>Наша мета полягає в надійному, ефективному і збалансованому забезпеченні споживачів природним газом та енергоносіями.</p>
				</div>	
			</div>
			<div class="col-md-4 equal">
				<div class="company_item">
					<div class="icon_box">
						<img src="<?php assets_url('img/values_icon.png') ?>" alt="values_icon">
					</div>
					<h3>Цінності</h3>
					<p>Наші цінності полягають у надійному, ефективному і збалансованому забезпеченні споживачів природним газом та енергоносіями.</p>
				</div>	
			</div>
		</div>
	</div>
</section>
<section class="products_section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8 col-lg-8 col-md-10 col-sm-12">
				<h2 class="text-center">Послуги</h2>
				<!-- <p class="section_subheading">FORTEX ENERGY - енергетична компанія, діяльністю якої є своєчасне постачання природного газу та електроенергії споживачам.</p> -->
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-6 equal">
				<div class="product_item product_gas">
					<h3><a href="/pryrodnyy-haz">Природний газ</a></h3>
					<button class="btn_filled" type="button" data-toggle="modal" data-target="#consultationModal">Підключитися</button>
				</div>
			</div>
			<div class="col-md-6 equal">
				<div class="product_item product_electricity">
					<h3><a href="/elektroenerhiia">Електрична енергія</a></h3>
					<button class="btn_filled" type="button" data-toggle="modal" data-target="#consultationModal">Підключитися</button>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="partners_section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8 col-lg-8 col-md-10 col-sm-12">
				<h2 class="text-center">Партнери</h2>
				<!-- <p class="section_subheading">Стратегічною метою нашої компанії є лідерство серед глобальних енергетичних компаній Європи.</p> -->
				<div class="partners partners_slider">
					<div class="partner_item">
						<img class="img img-fluid" src="<?php assets_url('img/partners/logo-arcelor.png') ?>" alt="arcelor" />
					</div>
					<div class="partner_item">
						<img class="img img-fluid" src="<?php assets_url('img/partners/kamelia-logo.png') ?>" alt="kamelia" />
					</div>
					<div class="partner_item">
						<img class="img img-fluid" src="<?php assets_url('img/partners/komo-logo.png') ?>" alt="komo" />	
					</div>
					<div class="partner_item">
						<img class="img img-fluid" src="<?php assets_url('img/partners/logo-volin.jpg') ?>" alt="volin" />
					</div>
					<div class="partner_item">
						<img class="img img-fluid" src="<?php assets_url('img/partners/terrafood-logo.png') ?>" alt="terrafood" />
					</div>
					<div class="partner_item">
						<img class="img img-fluid" src="<?php assets_url('img/partners/galicia-logo.png') ?>" alt="galicia" />		
					</div>
					<div class="partner_item">
						<img class="img img-fluid" src="<?php assets_url('img/partners/logo-pankurchak.png') ?>" alt="pankurchak" />	
					</div>
					<div class="partner_item">
						<img class="img img-fluid" src="<?php assets_url('img/partners/gavtkurch-logo.png') ?>" alt="gavtkurch" />		
					</div>
					<div class="partner_item">
						<img class="img img-fluid" src="<?php assets_url('img/partners/cheaseclub-logo.png') ?>" alt="cheaseclub" />		
					</div>
					<div class="partner_item">
						<img class="img img-fluid" src="<?php assets_url('img/partners/logo-spetstechno.png') ?>" alt="spetstechno" />		
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>