<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Decorlux
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
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
                    <span>Learn More</span>
                    <?php echo file_get_contents($img_path."/images/arrow.svg"); ?>
                </a>
            </div>
        </div>

    </div>



</article><!-- #post-<?php the_ID(); ?> -->
