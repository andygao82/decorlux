<?php
/* Template Name: Home Page */
get_header();

?>
<?php $img_path = get_template_directory_uri('/'); ?>
<?php
	if (have_rows('home')):
		while (have_rows('home')) : the_row();
?>
	<?php
		if (get_row_layout() == 'home_banner' && get_sub_field('banner_type') == 'image' && get_sub_field('banner_image')):
			$banner_image        = get_sub_field('banner_image');
			$banner_image_mobile = get_sub_field('banner_image_mobile');
			$banner_link         = get_sub_field('banner_link');
			$banner_alt          = $banner_image['alt'] ?: get_bloginfo('name');
	?>
		<div class="section banner home-banner home-banner--image">
			<?php if ($banner_link): ?>
				<a href="<?= esc_url($banner_link['url']) ?>"<?= $banner_link['target'] ? ' target="' . esc_attr($banner_link['target']) . '" rel="noopener"' : '' ?> aria-label="<?= esc_attr($banner_link['title'] ?: $banner_alt) ?>">
			<?php endif; ?>
				<picture>
					<?php if ($banner_image_mobile): ?>
						<source media="(max-width: 767px)" srcset="<?= esc_url($banner_image_mobile['url']) ?>">
					<?php endif; ?>
					<img src="<?= esc_url($banner_image['url']) ?>" width="<?= (int) $banner_image['width'] ?>" height="<?= (int) $banner_image['height'] ?>" alt="<?= esc_attr($banner_alt) ?>" fetchpriority="high">
				</picture>
			<?php if ($banner_link): ?>
				</a>
			<?php endif; ?>
		</div>
	<?php elseif (get_row_layout() == 'home_banner'): ?>
		<div class="section banner home-banner">
			<div class="banner-wrapper">
				<div class="banner-content">
					<div class="banner-image-wrapper">
						<img src="<?php echo $img_path ?>/images/logo-alt.png" alt="DecorLux Alt Logo">
					</div>
					<div class="banner-text-wrapper">
						<?= get_sub_field('home_banner_content') ?>
					</div>
				</div>
				<iframe 
					src="https://player.vimeo.com/video/<?= get_sub_field('home_video')?>?background=1&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479&amp;autoplay=1&amp;muted=1&amp;loop=1" 
					frameborder="0" 
					allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media" 
					title="DecorLux"
				></iframe>
			</div>
		</div>
	<?php endif; ?>
	<?php
		if (get_row_layout() == 'main_categories'):
			$_categories = ['one', 'two', 'three'];
	?>
		<div class="section home-categories">
			<div class="container">
				<div class="row">
					<?php foreach ($_categories as $_category): ?>
						<div class="col-md-4 fade-up">
							<a href="<?= get_sub_field('category_' . $_category . '_link')['url'] ?>">
								<div class="category-wrapper image-wrapper">
									<img src="<?= get_sub_field('category_' . $_category . '_image') ?>" alt="<?= get_sub_field('category_' . $_category . '_link')['title'] ?>">
									<h3><?= get_sub_field('category_' . $_category . '_link')['title'] ?></h3>
								</div>
							</a>
						</div>
					<?php endforeach; ?>
				
				</div>
			</div>
		</div>
	<?php endif; ?>

	<?php
		if (get_row_layout() == 'about_decorlux'):
	?>
		<div class="section content-section home-content-section about-decorlux">
			<div class="section-wrapper">
				<div class="section-content-container">
					<div class="inner-wrapper fade-left">
						<h2><?= get_sub_field('heading') ?></h2>
						<div class="home-section-content ">
							<?= get_sub_field('content') ?>
						</div>
					</div>
				</div>
				<div class="section-image-container">
					<img class="fade-right" src="<?= get_sub_field('image') ?>" >
				</div>
			</div>
		</div>
	<?php endif; ?>

	<?php
		if (get_row_layout() == 'why_decorlux'):
	?>

		<div class="section content-section home-content-section why-decorlux">
			<div class="section-wrapper">
				<div class="section-content-container">
					<div class="inner-wrapper fade-right">
						<h2><?= get_sub_field('heading') ?></h2>
						<div class="home-section-content">
							<?= get_sub_field('content') ?>
						</div>
					</div>
				</div>
				<div class="section-image-container fade-left">
					<img src="<?= get_sub_field('image') ?>" >
				</div>
			</div>
		</div>
	<?php endif; ?>


<?php
		endwhile;
	endif;
?>
<script src="https://player.vimeo.com/api/player.js"></script>

<?php get_footer(); ?>

