<section class="partners_section wow fadeInUp" data-wow-delay="1s" data-wow-duration="1">
	<div class="container">
		<div class="row justify-content-center">
			<div class="сol-md-10 col-sm-12">
				<h2 class="text-center"><?php the_field('section_heading');?></h2>
				<p class="section_subheading"><?php the_field('section_subheading');?></p>
			</div>
		</div>

		<?php if( have_rows('partners') ): ?>
				
			<div class="row justify-content-center">
				<div class="col-lg-8 col-md-10 col-sm-12">
					<div class="partners partners_slider">
					<?php while( have_rows('partners') ): the_row();
					$partner_logo = get_sub_field('partner_logo');
					?>
						<?php if($partner_logo): ?>
							<div class="partner_item">
								<img class="img img-fluid" src="<?php echo $partner_logo['url']; ?>" alt="<?php echo $partner_logo['alt']; ?>">
							</div>
						<?php endif; ?>
					<?php endwhile; ?>
					</div>
				</div>
			</div>
		
		<?php endif; ?>
	</div>
</section>
