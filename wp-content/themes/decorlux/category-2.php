<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Decorlux
 */

get_header();
?>

	<div class="section banner page-category-banner video-banner" style="background-image: url('<?php echo esc_url( z_taxonomy_image_url() ); ?>')">
		<?php if ( get_field( 'video_id', 'category_' . get_queried_object_id() ) ) : ?>
			<?php if ( get_field( 'video_source', 'category_' . get_queried_object_id() ) == 'Vimeo' ) : ?>
				<iframe 
					src="https://player.vimeo.com/video/<?php echo esc_attr( get_field( 'video_id', 'category_' . get_queried_object_id() ) ); ?>?background=1&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479&amp;autoplay=1&amp;muted=1&amp;loop=1" 
					frameborder="0" 
					allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media" 
					title="DecorLux"
				></iframe>
			<?php else : ?>
				<iframe 
					src="https://www.youtube.com/embed/<?php echo esc_attr( get_field( 'video_id', 'category_' . get_queried_object_id() ) ); ?>?autoplay=1&mute=1&loop=1" 
					title="Decorlux" 
					frameborder="0" 
					allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
					referrerpolicy="strict-origin-when-cross-origin" 
					allowfullscreen
				></iframe>
			<?php endif; ?>
		<?php endif; ?>
	</div>
	<div class="section page-category-top">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="inner-wrapper fade-up">
						<div class="page-category-description">
							<h1 class="post-title"><?php single_cat_title() ?></h1>
							<?php the_archive_description( '<div class="archive-description">', '</div>' ); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="section page-main grid-section">
		<div class="container">
			<div class="page-main-container">
				<ul class="page-main-container-wrapper grid-wrapper grid-wrapper-3">
					<li class="page-category-item page-category-item-1 grid-item fade-up">
						<a class="post-thumbnail image-wrapper" href="<?php echo get_permalink(212) ; ?>">
							<?php echo get_the_post_thumbnail( 212, 'full' ); ?>
						</a>
						<div class="page-category-item-content">
							<div class="page-category-item-content-wrapper">
								<a class="button" href="<?php echo esc_url( get_permalink( 212 ) )?>"><?php echo get_category(6)->name; ?></a>
							</div>
						</div>
					</li>
					<li class="page-category-item page-category-item-2 grid-item fade-up">
						<a class="post-thumbnail image-wrapper" href="<?php echo get_permalink(217) ; ?>">
							<?php echo get_the_post_thumbnail( 217, 'full' ); ?>
						</a>
						<div class="page-category-item-content">
							<div class="page-category-item-content-wrapper">
								<a class="button" href="<?php echo esc_url( get_permalink( 217 ) )?>"><?php echo get_category(7)->name; ?></a>
							</div>
						</div>
					</li>
					<li class="page-category-item page-category-item-3 grid-item fade-up">
						<a class="post-thumbnail image-wrapper" href="<?php echo get_permalink(219) ; ?>">
							<?php echo get_the_post_thumbnail( 219, 'full' ); ?>
						</a>
						<div class="page-category-item-content">
							<div class="page-category-item-content-wrapper">
							
								<a class="button" href="<?php echo esc_url( get_permalink( 219 ) )?>"><?php echo get_category(8)->name; ?></a>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
<?php
get_footer();
