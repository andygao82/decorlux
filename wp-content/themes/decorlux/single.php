<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Decorlux
 */

get_header();

$product_description = get_field('product_description');
$categories = get_the_category();
$product_top_banner_image = get_field('product_top_banner_image');
$product_top_banner_heading = get_field('product_top_banner_content');
?>
	<div class="banner section  ?> <?php if (get_field('product_top_banner_video_id')) {?>video-banner<?php }?>" style="background-image: url('<?= esc_url($product_top_banner_image)?>')">
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

	<div class="gallery">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="inner-wrapper">
						<ul class="grid">
							<li class="grid-sizer"></li>
							<?php for($i = 1; $i <=30; $i++):?>
								<?php if(get_field('product_image_'.$i.'')) :?>
									<?php ${"product_image_".$i} = get_field('product_image_'.$i.'') ?>
									<?php $product_image_description = ${"product_image_".$i}['description'] ?>
									<li class="grid-item fade-up">
										<div class="image-wrapper">
											<img src="<?= esc_url(${"product_image_".$i}['url']) ?>" alt="<?php echo esc_attr($product_image_description) ?>" title="<?php echo esc_attr($product_image_description) ?>">
										
										</div>
									</li>
								<?php endif; ?>
							<?php endfor?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
get_footer();
