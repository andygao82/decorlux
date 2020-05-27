<?php
/* Template Name: Terms conditions Page */
get_header();

?>

    <section class="page-banner pw-banner">
        <div class="page-banner-wrapper">
            <h1 class="page-title"><?php the_title() ?></h1>
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