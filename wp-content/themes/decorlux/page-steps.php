<?php
	/* Template Name: Steps Page */
	get_header();
	$category_page_banner_title = get_field('category_page_banner_title');
?>
		<?php
			$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
			$categoryID = get_field('category_id');
		?>

	<div 
		class="section banner page-category-banner <?php if (get_field('page_top_banner_video_id')) {?>video-banner<?php }?>" 
		style="background-image: url('<?= esc_url($featured_img_url)?>')"
	>
		<?php if (get_field('page_top_banner_video_id')) { ?>
				<?php if (get_field('page_top_banner_video_source') == "Vimeo") { ?>
				<iframe 
					src="https://player.vimeo.com/video/<?= get_field('page_top_banner_video_id')?>?background=1&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479&amp;autoplay=1&amp;muted=1&amp;loop=1" 
					frameborder="0" 
					allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media" 
					title="DecorLux"
				></iframe>
			<?php } else { ?>
			<iframe 
					src="https://www.youtube.com/embed/<?php echo get_field('page_top_banner_video_id')?>?autoplay=1&mute=1&loop=1" 
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
					<div class="inner-wrapper fade-up">
						<div class="page-category-description">
							<h1 class="post-title"><?php the_title() ?></h1>
							<div class="archive-description">
								<?php echo category_description($categoryID) ? category_description($categoryID) : ''; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section page-main">
		<div class="container">
				<div class="row">
					<div class="col">
						<div class="page-main-container">
							<ul class="page-main-container-wrapper steps-main-container-wrapper">
									<?php
										global $post;
										$myposts = get_posts( array(
											'numberposts'      => -1,
											'post_type'        => 'step',
											'order'            => 'ASC',
										) );
										if ( $myposts ) {
											foreach ( $myposts as $index => $post ) :
												setup_postdata( $post ); ?>
												<li class="page-category-item page-category-item-<?php echo $index + 1; ?>">
													<?php $_thumbnail = get_the_post_thumbnail() ?>
													<a class="post-thumbnail image-wrapper <?php echo ($index % 2 === 0) ? 'fade-left' : 'fade-right'; ?>" href="<?php echo esc_url( get_permalink() )?>">
														<?php if($_thumbnail){ ?>
																<?= get_the_post_thumbnail()?>
														<?php }else{?>
																<img src="<?php echo get_template_directory_uri('/'); ?>/images/image_20.jpg" alt="Placeholder">
														<?php } ?>
													</a>
													<div class="page-category-item-content <?php echo ($index % 2 === 0) ? 'fade-right' : 'fade-left'; ?>">
														<div class="page-category-item-content-wrapper">
															<h4 class="blog-title"><?php echo get_field('step_caption')?></h4>
															<h2 class="blog-title"><?php echo get_field('step_heading')?></h2>
															<h3 class="blog-title"><?php echo get_field('step_subheading')?></h3>
															<div class="blog-expert">
																<?php echo get_field('step_content')?>
															</div><!-- .entry-content -->
															<?php if(get_field('step_button')){?>
																<a class="button" href="<?php echo esc_url( get_field('step_button'))?>">Take Design Survey</a>
															<?php }?>
														</div>
													</div>
												</li>
											<?php
											endforeach;
											wp_reset_postdata();
										}
									?>
							</ul>
						</div>
					</div>
				</div>
		</div>
	
	</div>
<?php get_footer(); ?>
