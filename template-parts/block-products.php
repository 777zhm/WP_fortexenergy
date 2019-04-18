<section class="products_section wow fadeInUp" data-wow-delay="1s" data-wow-duration="1">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8 col-md-10 col-sm-12">
				<h2 class="text-center"><?php the_field('section_heading');?></h2>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-6 equal">
				<div class="product_item">
					<div class="product_gas_icon d-none d-md-block">
					</div>
					<div class="product_gas_text">
						<h3><a href="/pryrodnyy-haz"><?php the_field('block_heading_1');?></a></h3>
						<button class="btn_filled" type="button" data-toggle="modal" data-target="#consultationModal"><?php the_field('block_button_text_1');?></button>
					</div>
				</div>
			</div>
			<div class="col-md-6 equal">
				<div class="product_item">
					<div class="product_electricity_icon d-none d-md-block">
					</div>
					<div class="product_electricity_text">
						<h3><a href="/elektroenerhiia"><?php the_field('block_heading_2');?></a></h3>
						<button class="btn_filled" type="button" data-toggle="modal" data-target="#consultationModal"><?php the_field('block_button_text_2');?></button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>