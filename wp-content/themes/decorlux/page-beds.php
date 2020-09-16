<?php
/* Template Name: Beds Page */
get_header();
$category_page_banner_title = get_field('category_page_banner_title');
?>
<div class="page-category-content">
	<?php
	$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
	?>
	<?php if($featured_img_url){?>
    <section class="page-banner category-banner beds-banner" style="background-image: url('<?= esc_url($featured_img_url)?>')">
		<?php }else{ ?>
        <section class="page-banner category-banner beds-banner">
			<?php } ?>
		<div class="page-banner-wrapper">
            <?php if($category_page_banner_title){?>
			<h1 class="page-title"><?= $category_page_banner_title ?></h1>
            <?php } ?>
		</div>
	</section>
	<section class="category-description">
		<div class="container">
			<div class="row">
				<div class="col">
                    <div class="post-image">
						<?php if (function_exists('z_taxonomy_image')) z_taxonomy_image(13); ?>
                    </div>
					<div class="wrapper">
						<h2 class="post-title"><?php the_title() ?></h2>
						<div class="archive-description">
                            <?php echo category_description(13); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="page-main-content">
		<div class="container">
			<ul class="row">
					<?php
                        global $post;

                        $myposts = get_posts( array(
                            'numberposts'      => -1,
                            'category'       => 13
                        ) );
                        if ( $myposts ) {
                            foreach ( $myposts as $post ) :
                                setup_postdata( $post ); ?>
                                <li class="col-12 col-md-6 col-product">
	                                <?php $_thumbnail = get_the_post_thumbnail() ?>
	                                <?php if($_thumbnail){ ?>
		                                <?php decorlux_post_thumbnail(); ?>
	                                <?php }else{?>
                                        <a class="post-thumbnail" href="<?php echo esc_url( get_permalink() )?>">
                                            <img src="<?php echo get_template_directory_uri('/'); ?>/images/image_20.jpg" alt="Placeholder">
                                        </a>
	                                <?php } ?>
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
</div>
<?php get_footer(); ?>
