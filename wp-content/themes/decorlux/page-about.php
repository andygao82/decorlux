<?php
/* Template Name: About Us Page */
get_header();

?>
<?php
    $subtitle = get_field('subtitle');
    $who_are_we = get_field('who_are_we');
    $why_choose_us = get_field('why_choose_us');
?>
	<section class="page-banner about-banner">
        <div class="page-banner-wrapper">

            <h1 class="page-title"><?php the_title() ?></h1>
            <h2 class="page-subtitle">
                <?= $subtitle ?>
            </h2>
        </div>
	</section>

    <section class="who-we-are">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="wrapper">
                        <div class="wwa-img-1">
                            <img src="<?php echo get_template_directory_uri('/'); ?>/images/ww-1.jpg" alt="Who are We?">
                        </div>
                        <div class="inner-wrapper">
                            <h2 class="section-title">Who are we?</h2>
                            <div class="section-content">
                                <?= $who_are_we ?>
                            </div>
                            <?php $img_path = get_template_directory_uri('/'); ?>
                            <a href="#" class="site-link">
                                <span>Our Products</span>
                                <?php echo file_get_contents($img_path."/images/arrow.svg"); ?>
                            </a>
                        </div>
                        <div class="wwa-img-2">
                            <img src="<?php echo get_template_directory_uri('/'); ?>/images/ww-2.jpg" alt="Who are We?">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="why-choose-us">

        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="wrapper">

                        <div class="inner-wrapper">
                            <h2 class="section-title">Why choose us?</h2>
                            <?= $why_choose_us ?>
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>product-warranty" class="site-link">
                                <span>Product Warranty</span>
                                <?php echo file_get_contents($img_path."/images/arrow.svg"); ?>
                            </a>
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>terms-conditions" class="site-link">
                                <span>Terms & Conditions</span>
                                <?php echo file_get_contents($img_path."/images/arrow.svg"); ?>
                            </a>
                        </div>

                        <div class="wcu-img">
                            <img src="<?php echo get_template_directory_uri('/'); ?>/images/wcu.jpg" alt="Why choose us?">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

<?php get_footer(); ?>


