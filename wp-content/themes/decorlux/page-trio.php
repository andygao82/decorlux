<?php
/* Template Name: Trio Curtains Page */
get_header();

?>
<style>
    .trio-banner {
        background-image: url(https://www.decorlux.com.au/wp-content/themes/decorlux/images/about-banner.jpg);
        height: 400px;
    }
    .page-main-content .inner-wrapper {
        display: flex;
        gap: 24px;
        flex-direction: column;
        padding: 60px 0;
    }
    @media screen and (min-width: 768px) {
     .page-main-content .inner-wrapper {
      
        flex-direction: row;
    }
    }
</style>
    <section class="page-banner trio-banner">
        <div class="page-banner-wrapper">
            <h1 class="page-title"><?php the_title() ?></h1>
            <img src="<?php echo get_template_directory_uri('/'); ?>/images/mouse.svg" alt="mouse" id="mouse">

        </div>
    </section>

    <section class="page-main-content">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="inner-wrapper">
                        <div class="image-pdf image-pdf-1">
                            <a href="<?= get_field('link_1')?>" target="_blank">
                                <img src="<?= get_field('image_1')?>" alt="image">
                            </a>
                        </div>
                        <div class="image-pdf image-pdf-2">
                            <a href="<?= get_field('link_2')?>" target="_blank">
                                 <img src="<?= get_field('image_2')?>" alt="image">
                            </a>
                        </div>
                        <div class="image-pdf image-pdf-3">
                            <a href="<?= get_field('link_3')?>" target="_blank">
                                 <img src="<?= get_field('image_3')?>" alt="image">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php get_footer(); ?>
