<?php
/* Template Name: Home Page */
get_header();

?>
<?php
	if (have_rows('home')):
		while (have_rows('home')) : the_row();
?>
	<?php if (get_row_layout() == 'home_banner'): ?>

		<div class="section banner home-banner">
			<div class="banner-wrapper">
				<iframe 
					src="https://player.vimeo.com/video/<?= get_sub_field('home_video')?>?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479&amp;autoplay=1&amp;muted=1&amp;loop=1" 
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
						<div class="col-md-4">
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
					<div class="inner-wrapper">
						<h2><?= get_sub_field('heading') ?></h2>
						<div class="home-section-content">
							<?= get_sub_field('content') ?>
						</div>
					</div>
				</div>
				<div class="section-image-container">
					<img src="<?= get_sub_field('image') ?>" alt="<?= get_sub_field('heading') ?>">
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
					<div class="inner-wrapper">
						<h2><?= get_sub_field('heading') ?></h2>
						<div class="home-section-content">
							<?= get_sub_field('content') ?>
						</div>
					</div>
				</div>
				<div class="section-image-container">
					<img src="<?= get_sub_field('image') ?>" alt="<?= get_sub_field('heading') ?>">
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

