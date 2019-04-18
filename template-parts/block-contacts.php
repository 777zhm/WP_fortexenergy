<section class="contacts_section wow fadeInUp" id="contacts" data-wow-delay="1s" data-wow-duration="1">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6 col-md-10 col-sm-12">
				<div class="row contacts_row">
					<div class="col-12">
						<h2><?php the_field('section_heading', 'theme_settings');?></h2>
					</div>
					<div class="col-sm-6 contact_telephone">
						<p><span class="contacts_icon_box"><img src="<?php assets_url('img/icon_mail.png') ?>" alt="icon_mail"></span><a href = "mailto:<?php the_field('admin_email', 'theme_settings'); ?>"><?php the_field('admin_email', 'theme_settings'); ?></a></p>
						<p><span class="contacts_icon_box"><img src="<?php assets_url('img/icon_tel.png') ?>" alt="icon_tel"></span><a href="tel:<?php the_field('admin_tel', 'theme_settings'); ?>"><?php the_field('admin_tel', 'theme_settings'); ?></a></p>


						<?php if (get_locale() == 'uk'){ ?>
							<button class="btn_filled" type="button" data-toggle="modal" data-target="#disputeModal"><?php the_field('button_disputes_ukr', 'theme_settings');?></button>
						<?php }elseif (get_locale() == 'en_GB'){ ?>
							<button class="btn_filled" type="button" data-toggle="modal" data-target="#disputeModal"><?php the_field('button_disputes_eng', 'theme_settings');?></button>
						<?php } ?>


						
					</div>
					<div class="col-sm-6 contact_schedule">
						<?php the_field('schedule_ukr', 'theme_settings'); ?>
					</div>
				</div>
				<div class="row contacts_form_row justify-content-center">
					<div class="col-12">
						<?php if (get_locale() == 'uk'){ ?>
							<?php echo do_shortcode( '[contact-form-7 id="175" title="form_consalting_name_ukr"]' ); ?>
						<?php }elseif (get_locale() == 'en_GB'){ ?>
							<?php echo do_shortcode( '[contact-form-7 id="177" title="form_consalting_name_eng"]' ); ?>
						<?php } ?>
					</div>
				</div>
			</div>
			<div class="map_block col-lg-6 col-md-10 col-sm-12">
				<?php $link = get_field('admin_address_link', 'theme_settings'); ?>
				<?php if( $link ): 
					$link_url = $link['url'];
					$link_title = $link['title'];
				?>
				<iframe  src="<?php echo esc_url($link_url); ?>" width="100%" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</section>