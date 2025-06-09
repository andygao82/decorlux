<?php
/* Template Name: Trio Curtains Page */
get_header();

?>
<style>
    .trio-banner {
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
    <div class="section banner trio-banner" style="background-image: url('<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' ); ?>');">
    </div>

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
