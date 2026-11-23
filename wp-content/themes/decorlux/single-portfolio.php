<?php
/*
 * Template Name: Portfolio Template
 * Template Post Type: post
 */

get_header();

$product_description = get_field('product_description');
$categories = get_the_category();
$product_top_banner_image = get_field('product_top_banner_image');
$product_top_banner_heading = get_field('product_top_banner_content');
?>
	<div class="banner section cat-<?php echo $categories[0]->cat_ID ?> <?php if (get_field('product_top_banner_video_id')) {?>video-banner<?php }?>" style="background-image: url('<?= esc_url($product_top_banner_image)?>')">
		<?php if (get_field('product_top_banner_video_id')) { ?>
				<?php if (get_field('product_top_banner_video_source') == "Vimeo") { ?>
				<iframe 
					src="https://player.vimeo.com/video/<?= get_field('product_top_banner_video_id')?>?background=1&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479&amp;autoplay=1&amp;muted=1&amp;loop=1" 
					frameborder="0" 
					allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media" 
					title="DecorLux"
				></iframe>
			<?php } else { ?>
			<iframe 
					src="https://www.youtube.com/embed/<?php echo get_field('product_top_banner_video_id')?>?autoplay=1&mute=1&loop=1" 
					title="Decorlux" 
					frameborder="0" 
					allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
					referrerpolicy="strict-origin-when-cross-origin" 
					allowfullscreen
					mute
				></iframe>
			<?php } ?>
		<?php } ?>
	</div>
	
	<div class="section page-category-top">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="inner-wrapper">
						<div class="page-category-description">
							<h1 class="post-title"><?php the_title() ?></h1>
							<div class="archive-description">
								<?php echo get_field('product_description') ?>
							</div>
						
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php if (have_rows('design_development_gallery')): ?>
	<div class="portfolio-gallery">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="inner-wrapper">
						<h3>Design Development</h3>
						<ul class="portfolio-grid">
							<?php while (have_rows('design_development_gallery')): the_row(); 
									$image = get_sub_field('design_development_image');
							?>
								<li class="gallery-item image-wrapper fade-up">
									<?php if ($image): ?>
											<img src="<?php echo esc_url($image); ?>" />
									<?php endif; ?>
										
								</li>
							<?php endwhile; ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>
<?php if (have_rows('inspirations_gallery')): ?>
	<div class="portfolio-gallery">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="inner-wrapper">
						<h3>Inspirations</h3>
						<ul class="portfolio-grid">
							<?php while (have_rows('inspirations_gallery')): the_row(); 
									$image = get_sub_field('inspiration_image');
							?>
								<li class="gallery-item image-wrapper fade-up">
									<?php if ($image): ?>
											<img src="<?php echo esc_url($image); ?>" />
									<?php endif; ?>
										
								</li>
							<?php endwhile; ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>
<?php if (have_rows('view_your_moodboards')): ?>
	<div class="portfolio-gallery">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="inner-wrapper">
						<h3>View Your Moodboards</h3>
						<ul class="portfolio-grid">
						<?php while (have_rows('view_your_moodboards')): the_row();
								$image = get_sub_field('view_your_moodboards_image'); // update this based on actual field
								$title = get_sub_field('view_your_moodboards_text'); // update this too
						?>
								<li class="gallery-item fade-up">
									<?php if ($image): ?>
										<div class="image-wrapper">
											<img src="<?php echo esc_url($image); ?>" />
										</div>
									<?php endif; ?>
									<?php if ($title): ?>
										<div class="image-title"><?php echo strtolower(esc_html($title)); ?></div>
									<?php endif; ?>
								</li>
						<?php endwhile; ?>
							
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php endif; ?>
	<?php if (have_rows('3d_visual_gallery')): ?>
		<div class="portfolio-gallery">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="inner-wrapper">
								<h3>3D Visual</h3>
								<ul class="portfolio-grid">
									<?php while (have_rows('3d_visual_gallery')): the_row(); 
											$image = get_sub_field('3d_visual_image');
									?>
										<li class="gallery-item image-wrapper fade-up">
											<?php if ($image): ?>
													<img src="<?php echo esc_url($image); ?>" />
											<?php endif; ?>
												
										</li>
									<?php endwhile; ?>
								</ul>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<div class="inner-wrapper kuula-wrapper">
								<iframe width="100%" height="640" frameborder="0" allow="xr-spatial-tracking; gyroscope; accelerometer" allowfullscreen="" scrolling="no" src="https://kuula.co/share/collection/<?= get_field('kuula_visual_id')?>?logo=1&amp;info=1&amp;fs=1&amp;vr=0&amp;thumbs=1"></iframe>
							</div>
						</div>
					</div>
				</div>
			</div>
	<?php endif; ?>

	<?php if (get_field('house_plan_image')): ?>
		<div class="portfolio-gallery">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="inner-wrapper">
							<h3>House Plan</h3>
							<div class="house-plan-image image-wrapper fade-up">
								<img src="<?php echo esc_url(get_field('house_plan_image')); ?>" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>

<?php
get_footer();
