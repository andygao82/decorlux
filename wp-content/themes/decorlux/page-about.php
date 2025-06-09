<?php
/* Template Name: About Us Page */
get_header();
?>
<?php
	if (have_rows('about')) :
		while (have_rows('about')) : the_row();
?>
	<?php if (get_row_layout() == 'about_banner'): ?>

		<div class="section banner about-banner" style="background-image: url('<?= get_sub_field('banner_image') ?>');">
		</div>
	<?php endif; ?>
	<?php if (get_row_layout() == 'about_decorlux'): ?>

		<div class="section content-section about-content-section about-decorlux">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="section-wrapper">
							<div class="section-content-container fade-right">
								<div class="inner-wrapper">
									<h2><?= get_sub_field('heading') ?></h2>
									<div class="about-section-content">
										<?= get_sub_field('content') ?>
									</div>
								</div>
							</div>
							<div class="section-image-container fade-left">
								<img src="<?= get_sub_field('image') ?>" alt="<?= get_sub_field('heading') ?>">
							</div>
						</div>
					</div>
				</div>
			</div>
		
		</div>
	<?php endif; ?>

	<?php if (get_row_layout() == 'why_decorlux'): ?>

		<div class="section content-section about-content-section why-decorlux">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="section-wrapper">
							<div class="section-content-container fade-right">
								<div class="inner-wrapper">
									<h2><?= get_sub_field('heading') ?></h2>
									<div class="about-section-content">
										<?= get_sub_field('content') ?>
									</div>
								</div>
							</div>
							<div class="section-image-container fade-left">
								<img src="<?= get_sub_field('image') ?>" alt="<?= get_sub_field('heading') ?>">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>
<?php endwhile; endif ?>
<?php get_footer(); ?>


