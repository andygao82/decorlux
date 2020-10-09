<?php
/* Template Name: Contact Us Page */
get_header();

?>

    <section class="page-banner contact-banner">
        <div class="page-banner-wrapper">
            <h1 class="page-title"><?php the_title() ?></h1>
            <h2 class="page-subtitle">
                Hello, How may I help you?
            </h2>
            <div class="page-banner-content">
                <span>For assistance, or to arrange a </span><strong>FREE NO OBLIGATION</strong> <span>measure and quote, simply contact us on <a style="color: #ffffff" href="tel:0397690474">03 9769 0474</a>, or by simply completing the contact form below. We will endeavor to contact you within 24 hours or next business day.</span>
            </div>
            <div class="cup-img">
                <img src="<?php echo get_template_directory_uri('/'); ?>/images/cup-img.jpg" alt="Contact Us">
            </div>
        </div>
    </section>

    <section class="page-main-content">

        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-12 col-12">
                    <div class="wrapper wrapper-1">
                        <h2>Instant Quote</h2>
                        <?php echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]') ?>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12 col-12">
                    <div class="wrapper wrapper-2">
                        <h2>Contact Detail</h2>
                        <ul>
                            <li>
                                <h3>Address</h3>
                                <p>
                                    <?php if(!empty(get_field('address_line_1'))):?>
                                        <span><?= get_field('address_line_1')?></span>
                                    <?php endif ?>
	                                <?php if(!empty(get_field('address_line_2'))):?>
                                     <span><?= get_field('address_line_2')?></span>
	                                <?php endif ?>
                                </p>
                            </li>
                            <li>
                                <h3>Phone</h3>
                                <p>
	                                <?php if(!empty(get_field('phone'))):?>
                                    <a href="tel:<?= get_field('phone')?><?= get_field('phone')?>"><span><?= get_field('phone')?></span></a>
                                    <?php endif ?>
	                                <?php if(!empty(get_field('mobile'))):?>
                                    <a href="tel:<?= get_field('mobile')?>"><span><?= get_field('mobile')?></span></a>
	                                <?php endif ?>
                                </p>
                            </li>
	                        <?php if(!empty(get_field('fax'))):?>
                            <li>
                                <h3>Fax</h3>
                                <p>
                                    <a href="tel:<?= get_field('fax')?>"><span><?= get_field('fax')?></span></a>
                                </p>
                            </li>
	                        <?php endif ?>
                            <?php if(!empty(get_field('email'))):?>
                            <li>
                                <h3>Email</h3>
                                <p>
                                    <a href="mailto:<?= get_field('email')?>"><?= get_field('email')?></a>
                                </p>
                            </li>
	                        <?php endif ?>
                            <?php if(!empty(get_field('trading_hours'))):?>
                            <li>
                                <h3>Trading Hours</h3>
                                <p>
                                    <span><?= get_field('trading_hours')?></span>
                                </p>
                            </li>
	                        <?php endif ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php get_footer(); ?>
