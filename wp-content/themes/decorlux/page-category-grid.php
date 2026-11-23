<?php
	/* Template Name: Category Grid Page */
	get_header();
	$category_page_banner_title = get_field('category_page_banner_title');
?>
		<?php
			$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
			$categoryID = get_field('category_id');
		?>
	<?php if($featured_img_url){?>
		<div class="section banner page-category-banner" style="background-image: url('<?= esc_url($featured_img_url)?>')">
	<?php }else{ ?>
		<div class="section banner page-category-banner">
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
								<?php echo category_description($categoryID) ? category_description($categoryID) : ''; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section page-main grid-section">
		<div class="container">
			<div class="page-main-container">
				<ul class="page-main-container-wrapper grid-wrapper">
						<?php
							global $post;
							$myposts = get_posts( array(
								'numberposts'      => -1,
								'category'       => $categoryID
							) );
							if ( $myposts ) {
								foreach ( $myposts as $index => $post ) :
									setup_postdata( $post ); ?>
									<li class="page-category-item page-category-item-<?php echo $index + 1; ?> fade-up">
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
												<h2 class="blog-title"><a href="<?php echo esc_url( get_permalink() )?>" rel="bookmark">
													<?php echo strtolower(get_the_title()) ?>
												</a></h2>
												<?php $_excerpt = get_the_excerpt() ?>
												<?php if($_excerpt){ ?>
													<div class="blog-expert">
														<?php the_excerpt(); ?>
													</div><!-- .entry-content -->
												<?php } ?>
												<?php $img_path = get_template_directory_uri('/'); ?>
												<a class="button" href="<?php echo esc_url( get_permalink() )?>">Read More</a>
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
<?php get_footer(); ?>
