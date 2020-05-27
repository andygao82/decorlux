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
    <section class="page-banner category-banner">
        <div class="page-banner-wrapper">
            <h1 class="page-title"><?php single_cat_title( '<h1 class="page-title">', '</h1>' ); ?></h1>
        </div>
    </section>

    <section class="category-description">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="post-image">
                    <?php if (function_exists('z_taxonomy_image')) z_taxonomy_image(); ?>
                    </div>
                    <div class="wrapper">
                        <h2 class="post-title">DecorLUX <?php single_cat_title(); ?></h2>
                        <?php
                            the_archive_description( '<div class="archive-description">', '</div>' );
                        ?>

                    </div>

                </div>
            </div>
        </div>

    </section>

    <section class="category-blogs">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="wrapper">
                        <?php if ( have_posts() ) : ?>

                            <?php
                            /* Start the Loop */
                            while ( have_posts() ) :
                                the_post();

                                /*
                                 * Include the Post-Type-specific template for the content.
                                 * If you want to override this in a child theme, then include a file
                                 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                                 */
                                get_template_part( 'template-parts/content', get_post_type() );

                            endwhile;


                        else :

                            get_template_part( 'template-parts/content', 'none' );

                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
