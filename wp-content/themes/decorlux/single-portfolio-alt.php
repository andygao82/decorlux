<?php
/*
 * Template Name: Portfolio Alt Template
 * Template Post Type: post
 */

get_header();

$product_description = get_field('product_description');
$categories = get_the_category();
$portfolio_top_banner_image = get_field('portfolio_top_banner_image');
$product_top_banner_heading = get_field('product_top_banner_content');
?>
	<div class="banner section cat-<?php echo $categories[0]->cat_ID ?> <?php if (get_field('portfolio_top_banner_video_id')) {?>video-banner<?php }?>" style="background-image: url('<?= esc_url($portfolio_top_banner_image)?>')">
		<?php if (get_field('portfolio_top_banner_video_id')) { ?>
				<?php if (get_field('portfolio_top_banner_video_source') == "Vimeo") { ?>
				<iframe 
					src="https://player.vimeo.com/video/<?= get_field('portfolio_top_banner_video_id')?>?background=1&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479&amp;autoplay=1&amp;muted=1&amp;loop=1" 
					frameborder="0" 
					allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media" 
					title="DecorLux"
				></iframe>
			<?php } else { ?>
			<iframe 
					src="https://www.youtube.com/embed/<?php echo get_field('portfolio_top_banner_video_id')?>?autoplay=1&mute=1&loop=1&playlist=<?php echo get_field('portfolio_top_banner_video_id')?>" 
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
								<?php echo get_field('portfolio_description') ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section portfolio-alt-section">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="inner-wrapper">
						<?php while (have_rows('portfolio_content')): the_row(); ?>
						<div class="portfolio-alt-content">
							<?php 
								$gallery = get_sub_field('portfolio_gallery');
								$heading = get_sub_field('portfolio_content_heading');
								$content = get_sub_field('portfolio_content_content');
							?>
							<div class="portfolio-alt-content-wrapper">
								<div class="portfolio-alt-content-main">
									<?php if( $heading ): ?>
										<h3><?php echo $heading; ?></h3>
									<?php endif; ?>
									<?php if( $content ): ?>
										<div class="portfolio-description"><?php echo $content; ?></div>
									<?php endif; ?>
								</div>
                <?php if( $gallery ): ?>
									<div class="portfolio-alt-gallery swiper">
										<div class="swiper-wrapper">
											<?php foreach( $gallery as $image ): ?>
												<div class="swiper-slide portfolio-alt-gallery-item">
													<img src="<?php echo esc_url($image); ?>" />
												</div>
											<?php endforeach; ?>
										</div>
									</div>
                <?php endif; ?>
							</div>
						</div>
						<?php endwhile; ?>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php
get_footer();
