<section class="company_section wow fadeInUp d-none d-md-block" data-wow-delay="1s" data-wow-duration="1">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8 col-md-10 col-sm-12">
				<h2 class="text-center"><?php the_field('section_heading');?></h2>
				<p class="section_subheading"><?php the_field('section_subheading');?></p>
			</div>
		</div>
		<div class="row">
			<?php if( have_rows('aboutus_blocks') ): ?>
				<?php while( have_rows('aboutus_blocks') ): the_row();
					$block_icon = get_sub_field('block_icon');
				?>
				<div class="col-md-4 equal">
					<div class="company_item">
						<div class="icon_box">
							<?php if($block_icon): ?>
							<img src="<?php echo $block_icon['url']; ?>" alt="<?php echo $block_icon['alt']; ?>">
							<?php endif; ?>
						</div>
						<h3><?php the_field('block_heading');?></h3>
						<p><?php the_field('block_text');?></p>
					</div>	
				</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</section>