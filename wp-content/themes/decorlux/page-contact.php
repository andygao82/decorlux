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
                <span>For assistance, or to arrange a </span><strong>FREE NO OBLIGATION</strong> <span>measure and quote, simply contact us on 03 9769 0474, or by simply completing the contact form below. We will endeavor to contact you within 24 hours or next business day.</span>
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
                                    <span>185 Cheltenham Rd,</span>
                                    <span>Keysborough VIC 3133</span>
                                </p>
                            </li>
                            <li>
                                <h3>Phone</h3>
                                <p>
                                    <a href="tel:0397690474"><span>03 9769 0474</span></a>
                                    <a href="tel:1800200668"><span>1800200668</span></a>
                                </p>
                            </li>
                            <li>
                                <h3>Fax</h3>
                                <p>
                                    <a href="tel:0397691476"><span>03 9769 1476</span></a>
                                </p>
                            </li>
                            <li>
                                <h3>Email</h3>
                                <p>
                                    <a href="mailto:info@decorlux.com.au">info@decorlux.com.au</a>
                                </p>
                            </li>
                            <li>
                                <h3>Trading Hours</h3>
                                <p>
                                    <span>Monday - Friday 9:00AM to 6:00PM</span>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php get_footer(); ?>