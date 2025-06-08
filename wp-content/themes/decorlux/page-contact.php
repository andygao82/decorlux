<?php
/* Template Name: Contact Us Page */
get_header();

?>
<?php
	if (have_rows('contact_us')) :
		while (have_rows('contact_us')) : the_row();
?>
	<?php if (get_row_layout() == 'contact_banner'): ?>
	<div class="section banner contact-banner" style="background-image: url('<?= get_sub_field('banner_image') ?>');"></div>
	<?php endif; ?>

	<?php if (get_row_layout() == 'store_details'): ?>

		<div class="section header-section contact-header-section">
			<div class="container">
				<div class="row">
					<div class="col">
						<h2>Contact Us</h2>
						<div class="break-line"></div>
						<div class="header-content">
							<div class="header-content-wrapper">
								<?= get_sub_field('details') ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section content-section contact-info-section">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="section-wrapper">
							<div class="contact-form">
								<?php echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]') ?>
							</div>
							<div class="contact-details">
								<?php if (get_sub_field('address')): ?>
									<div class="contact-item">
										<h4>Address</h4>
										<span><?= get_sub_field('address') ?></span>
									</div>
								<?php endif; ?>
								<?php if (get_sub_field('phone')): ?>
									<div class="contact-item">
										<h4>Phone</h4>
										<a href="tel:<?= get_sub_field('phone')?>"><?= get_sub_field('phone') ?></a>
										<a href="tel:<?= get_sub_field('phone_2')?>"><?= get_sub_field('phone_2') ?></a>
									</div>
								<?php endif; ?>
								<?php if (get_sub_field('fax')): ?>
									<div class="contact-item">
										<h4>Fax</h4>
										<span><?= get_sub_field('fax') ?></span>
									</div>
								<?php endif; ?>
								<?php if (get_sub_field('email')): ?>
									<div class="contact-item">
										<h4>Email</h4>
										<a href="mailto:<?= get_sub_field('email') ?>"><?= get_sub_field('email') ?></a>
									</div>
								<?php endif; ?>
								<?php if (get_sub_field('trading_hours')): ?>
									<div class="contact-item">
										<h4>Trading Hours</h4>
										<span><?= get_sub_field('trading_hours') ?></span>
									</div>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="map-section">
			<div class="container">
				<div class="row">
					<div class="col">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3144.3472373862332!2d145.1904109!3d-37.992360399999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad6139ad36daed3%3A0x4a5994df6f6832b0!2s185%20Cheltenham%20Rd%2C%20Keysborough%20VIC%203173!5e0!3m2!1szh-CN!2sau!4v1749346491695!5m2!1szh-CN!2sau" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>

<?php endwhile; endif ?>

<?php get_footer(); ?>
