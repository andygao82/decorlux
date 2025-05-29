<?php
	/* Template Name: Category Page */
	get_header();
	$category_page_banner_title = get_field('category_page_banner_title');
?>
		<?php
			$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
			$categoryID = get_field('category_id')
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
						<a class="back-button" href="javascript:;">
							<span class="material-symbols-outlined icon">arrow_back_ios</span> 
							<span>Back</span>
						</a>
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
	<section class="page-main-content">
		<div class="container">
			<ul class="row">
					<?php
						global $post;
						$myposts = get_posts( array(
							'numberposts'      => -1,
							'category'       => $categoryID
						) );
						if ( $myposts ) {
							foreach ( $myposts as $post ) :
								setup_postdata( $post ); ?>
								<li class="col-12 col-md-6 col-product">
									<?php $_thumbnail = get_the_post_thumbnail() ?>
									<a class="post-thumbnail" href="<?php echo esc_url( get_permalink() )?>">
										<?php if($_thumbnail){ ?>
												<?= get_the_post_thumbnail()?>
										<?php }else{?>
												<img src="<?php echo get_template_directory_uri('/'); ?>/images/image_20.jpg" alt="Placeholder">
										<?php } ?>
									</a>
									<div class="wrapper">
										<div class="inner-wrapper">
											<h2 class="blog-title"><a href="<?php echo esc_url( get_permalink() )?>" rel="bookmark"><?php the_title() ?></a></h2>
											<div class="blog-expert">
												<?php $_excerpt = get_the_excerpt() ?>
												<?php if($_excerpt){ ?>
													<?php the_excerpt(); ?>
												<?php }else{?>
													Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
													tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
												<?php } ?>
											</div><!-- .entry-content -->
											<?php $img_path = get_template_directory_uri('/'); ?>
											<div class="blog-link">
												<a href="<?php echo esc_url( get_permalink() )?>">
													<span>More</span>
													<?php echo file_get_contents($img_path."/images/arrow.svg"); ?>
												</a>
											</div>
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
	</section>
<?php get_footer(); ?>
