<?php /* Template Name: Mainpage eng Template */ ?>
<?php get_header(); ?>

<section class="heroscreen_section" style="background-image: url(<?php assets_url('img/heroscreen_bg.svg') ?>);">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-7">
				<h1>Reliable supplier of gas and electricity for local and foreign consumers</h1>
				<p class="section_subheading">Modern energy-resource company which understands the needs of customers</p>
				<button class="btn_filled">Our tariffs</button>
				<button class="btn_base" type="button" data-toggle="modal" data-target="#consultationModal">Join us</button>
			</div>
		</div>
	</div>
</section>
<section class="company_section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8 col-lg-8 col-md-10 col-sm-12">
				<h2 class="text-center">Company</h2>
				<p class="section_subheading">The strategic goal of the company is to become a leader among global energy-resource companies within Europe by diversifying its sales markets, ensuring reliability of supplies, and constantly increasing the efficiency of operations</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 equal">
				<div class="company_item">
					<div class="icon_box">
						<img src="<?php assets_url('img/mission_icon.png') ?>" alt="mission_icon">
					</div>
					<h3>Mission</h3>
					<p>Our mission is to ensure reliable, efficient and balanced provision of consumers with natural gas and energy</p>
				</div>	
			</div>
			<div class="col-md-4 equal">
				<div class="company_item">
					<div class="icon_box">
						<img src="<?php assets_url('img/goal_icon.png') ?>" alt="goal_icon">
					</div>
					<h3>Goal</h3>
					<p>Our goal is to maintain highest standards of operations and customer service</p>
				</div>	
			</div>
			<div class="col-md-4 equal">
				<div class="company_item">
					<div class="icon_box">
						<img src="<?php assets_url('img/values_icon.png') ?>" alt="values_icon">
					</div>
					<h3>Values</h3>
					<p>Our values are leadership, determination, building trustful and mutually-beneficial business relationships with our partners and clients, impeccable execution of our obligations, sustainability and stability</p>
				</div>	
			</div>
		</div>
	</div>
</section>
<section class="products_section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8 col-lg-8 col-md-10 col-sm-12">
				<h2 class="text-center">Services</h2>
				<p class="section_subheading">FORTEX ENERGY is an energy-resource company whose activity is timely and flawless supply of natural gas and electricity to consumers</p>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-6 equal">
				<div class="product_item product_gas">
					<h3><a href="/en/natural-gas/">Gas</a></h3>
					<button class="btn_filled" type="button" data-toggle="modal" data-target="#consultationModal">Join us</button>
				</div>
			</div>
			<div class="col-md-6 equal">
				<div class="product_item product_electricity">
					<h3><a href="/en/electricity/">Electricity</a></h3>
					<button class="btn_filled" type="button" data-toggle="modal" data-target="#consultationModal">Join us</button>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="partners_section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8 col-lg-8 col-md-10 col-sm-12">
				<h2 class="text-center">Partners</h2>
				<p class="section_subheading">We appreciate our partners for choosing us among other energy-resource suppliers and reward them with individual solutions and excellent service</p>
				<div class="partners partners_slider">
					<div class="partner_item">
						<img class="img img-fluid" src="<?php assets_url('img/partners/logo-arcelor.png') ?>" alt="arcelor" />
					</div>
					<div class="partner_item">
						<img class="img img-fluid" src="<?php assets_url('img/partners/oboronprom-logo.png') ?>" alt="oboronprom" />
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
					<div class="partner_item">
						<img class="img img-fluid" src="<?php assets_url('img/partners/logo-rsz.png') ?>" alt="rsz" />		
					</div>
					<div class="partner_item">
						<img class="img img-fluid" src="<?php assets_url('img/partners/gastrans-logo.jpg') ?>" alt="gastrans" />		
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>