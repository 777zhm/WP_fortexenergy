<section id="timer_section" class="advantages_section wow fadeInUp" data-wow-delay="1s" data-wow-duration="1">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8 col-md-10 col-sm-12">
				<h2 class="text-center"><?php the_field('section_heading');?></h2>
			</div>
		</div>
		<div class="row justify-content-center text-center">
			<div class="col-md-4 col-sm-6 advantages_item">
				<div class="square_decorative">
					<?php $block_icon = get_sub_field('block_icon_1');?>
					<?php if($block_icon): ?>
							<img src="<?php echo $block_icon['url']; ?>" alt="<?php echo $block_icon['alt']; ?>">
					<?php endif; ?>
				</div>
				<div>
					<h4 class="advantage_heading"><span class="timer" data-from="0" data-to="5" data-speed="5000" data-refresh-interval="50">5</span><?php the_field('block_heading_1');?></h4>
					<p class="advantage_subheading"><?php the_field('block_subheading_1');?></p>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 advantages_item">
				<div class="square_decorative">
					<?php $block_icon = get_sub_field('block_icon_2');?>
					<?php if($block_icon): ?>
							<img src="<?php echo $block_icon['url']; ?>" alt="<?php echo $block_icon['alt']; ?>">
					<?php endif; ?>
				</div>
				<div>
					<h4 class="advantage_heading"><span class="timer" data-from="0" data-to="3" data-speed="5000" data-refresh-interval="50">3</span><?php the_field('block_heading_2');?></h4>
					<p class="advantage_subheading"><?php the_field('block_subheading_2');?></p>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 advantages_item">
				<div class="square_decorative">
					<?php $block_icon = get_sub_field('block_icon_3');?>
					<?php if($block_icon): ?>
							<img src="<?php echo $block_icon['url']; ?>" alt="<?php echo $block_icon['alt']; ?>">
					<?php endif; ?>
				</div>
				<div>
					<h4 class="advantage_heading"><span class="timer" data-from="0" data-to="50" data-speed="5000" data-refresh-interval="50">50</span><?php the_field('block_heading_3');?></h4>
					<p class="advantage_subheading"><?php the_field('block_subheading_3');?></p>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 advantages_item">
				<div class="square_decorative">
					<?php $block_icon = get_sub_field('block_icon_4');?>
					<?php if($block_icon): ?>
							<img src="<?php echo $block_icon['url']; ?>" alt="<?php echo $block_icon['alt']; ?>">
					<?php endif; ?>
				</div>
				<div>
					<h4 class="advantage_heading"><span class="timer" data-from="0" data-to="20" data-speed="5000" data-refresh-interval="50">20</span><?php the_field('block_heading_4');?></h4>
					<p class="advantage_subheading"><?php the_field('block_subheading_4');?></p>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 advantages_item">
				<div class="square_decorative">
					<?php $block_icon = get_sub_field('block_icon_5');?>
					<?php if($block_icon): ?>
							<img src="<?php echo $block_icon['url']; ?>" alt="<?php echo $block_icon['alt']; ?>">
					<?php endif; ?>
				</div>
				<div>
					<h4 class="advantage_heading"><span class="timer" data-from="0" data-to="25" data-speed="5000" data-refresh-interval="50">25</span><?php the_field('block_heading_5');?></h4>
					<p class="advantage_subheading"><?php the_field('block_subheading_5');?></p>
				</div>
			</div>
		</div>
	</div>
</section>