<section class="company_section wow fadeInUp d-none d-md-block" data-wow-delay="2s" data-wow-duration="1">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8 col-md-10 col-sm-12">
				<h2 class="text-center">Компанія</h2>
				<p class="section_subheading">Стратегічною метою нашої компанії є лідерство серед глобальних енергетичних компаній Європи за допомогою диверсифікації ринків збуту, забезпечення надійності поставок та зростання ефективності діяльності</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 equal">
				<div class="company_item">
					<div class="icon_box">
						<img src="<?php assets_url('img/mission_icon.png') ?>" alt="mission_icon">
					</div>
					<h3>Місія</h3>
					<p>Наша місія полягає в надійному, ефективному і збалансованому забезпеченні споживачів природним газом та енергоносіями</p>
				</div>	
			</div>
			<div class="col-md-4 equal">
				<div class="company_item">
					<div class="icon_box">
						<img src="<?php assets_url('img/goal_icon.png') ?>" alt="goal_icon">
					</div>
					<h3>Мета</h3>
					<p>Наша мета це підтримання найвищих стандартів операцiйної діяльності та роботи з клієнтами</p>
				</div>	
			</div>
			<div class="col-md-4 equal">
				<div class="company_item">
					<div class="icon_box">
						<img src="<?php assets_url('img/values_icon.png') ?>" alt="values_icon">
					</div>
					<h3>Цінності</h3>
					<p>Нашими цiнностями є лідерство, рішучість, довірчі та взаємовигідні стосунки з нашими партнерами та клієнтами, бездоганне виконнання взятих на себе зобов'язань</p>
				</div>	
			</div>
		</div>
	</div>
</section>



<section>
	<div class="aboutus_section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-sm-12">
					<h2 class="section_heading"><?php the_field('section_heading');?></h2>
				</div>
				<?php if( have_rows('aboutus_blocks') ): ?>
				<?php while( have_rows('aboutus_blocks') ): the_row();
					$block_icon = get_sub_field('block_icon');
				?>
				<div class="col-sm-6 col-md-4 col-lg-3">
					<div class="aboutus_item">
						<div class="ribbon"><span><?php the_sub_field('block_label');?></span></div>
						<?php if($block_icon): ?>
						<img class="aboutus_item_icon" src="<?php echo $block_icon['url']; ?>" alt="<?php echo $block_icon['alt']; ?>">
						<?php endif; ?>
						<h3 class="block_heading"><?php the_sub_field('block_heading');?></h3>
						<p><?php the_sub_field('block_text');?></p>
					</div>
				</div>
				<?php endwhile; ?>
				<?php endif; ?>
			</div>
			<div class="row justify-content-center advantages_row">
				<?php if( have_rows('advantages') ): ?>
				<?php while( have_rows('advantages') ): the_row(); ?>
				<div class="advantages_item">
					<p><?php the_sub_field('advantage');?></p>
				</div>
				<?php endwhile; ?>
				<?php endif; ?>		
			</div>
		</div>
	</div>
</section>