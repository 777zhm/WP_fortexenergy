<section class="heroscreen_section wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="0.5s">
	<div class="container">
		<div class="row align-items-center">
			<div class="heroscreen_box col-lg-7">
				<h1><?php the_field('section_heading');?></h1>
				<p class="section_subheading"><?php the_field('section_subheading');?></p>
				<button class="btn_base" type="button" data-toggle="modal" data-target="#tariffsModalUkr"><?php the_field('button_text_1');?></button>
				<button class="btn_filled" type="button" data-toggle="modal" data-target="#consultationModal"><?php the_field('button_text_2');?></button>
			</div>
			<div class="heroscreen_bg col-lg-5" style="background-image: url(<?php assets_url('img/heroscreen_bg.svg') ?>);">
			</div>
		</div>
	</div>
</section>