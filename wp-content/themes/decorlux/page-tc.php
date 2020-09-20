<?php
/* Template Name: Terms conditions Page */
get_header();

?>

    <section class="page-banner pw-banner">
        <div class="page-banner-wrapper">
            <h1 class="page-title"><?php the_title() ?></h1>
            <img src="<?php echo get_template_directory_uri('/'); ?>/images/mouse.svg" alt="mouse" id="mouse">

        </div>
    </section>

    <section class="page-main-content">
        <div class="container">
            <div class="row">
                <div class="col">

                    <?= get_field('terms_and_conditions_content') ?>

                </div>
            </div>
        </div>
    </section>


<?php get_footer(); ?>
