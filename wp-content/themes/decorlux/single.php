<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Decorlux
 */

get_header();

$product_description = get_field('product_description');
$product_image_1 = get_field('product_image_1');
$product_image_2 = get_field('product_image_2');
$product_image_3 = get_field('product_image_3');
$product_image_4 = get_field('product_image_4');
$product_image_5 = get_field('product_image_5');
$product_image_6 = get_field('product_image_6');
$categories = get_the_category();

?>


    <section class="page-banner product-banner cat-<?php echo $categories[0]->cat_ID ?>">
        <div class="page-banner-wrapper">
            <h1 class="page-title"><?php the_title() ?></h1>
        </div>
    </section>

    <section class="product-details">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="wrapper">
                        <div class="product-detail-left">
                            <div class="product-cat">
                                <?php
                                    echo $categories[0]->name;
                                ?>
                            </div>
                            <div class="product-range">
                                <?php the_title() ?><br>Range
                            </div>
                            <?php $img_path = get_template_directory_uri('/'); ?>
                            <div class="product-more">
                                <a href="#"><span>More ranges</span><?php echo file_get_contents($img_path."/images/arrow.svg"); ?></a>
                            </div>

                        </div>

                        <div class="product-detail-image">
                            <?php if(get_the_post_thumbnail_url()) {?>
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title() ?>">
                            <?php }else{ ?>
                                <img src="<?php echo get_template_directory_uri('/'); ?>/images/image_19.jpg" alt="Placeholder">
                            <?php }?>
                        </div>

                        <div class="product-detail-description">
	                        <?php if($product_description) {?>
		                        <?= $product_description;  ?>
	                        <?php }else{ ?>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	                        <?php }?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="gallery-section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="wrapper">
                        <h2><span>Image Gallery</span><?php echo file_get_contents($img_path."/images/arrow.svg"); ?></h2>
                        <ul>
                            <?php if($product_image_1) {?>
                            <li>
                                <a rel="product-gallery-img" href="<?= $product_image_1?>">
                                    <img src="<?= $product_image_1?>" alt="img1">
                                </a>
                            </li>
                            <?php }?>
                            <?php if($product_image_2) {?>
                            <li>
                                <a rel="product-gallery-img" href="<?= $product_image_2?>">
                                    <img src="<?= $product_image_2?>" alt="img1">
                                </a>
                            </li>
                            <?php }?>
                            <?php if($product_image_3) {?>
                            <li>
                                <a rel="product-gallery-img" href="<?= $product_image_3?>">
                                    <img src="<?= $product_image_3?>" alt="img1">
                                </a>
                            </li>
                            <?php }?>
                            <?php if($product_image_4) {?>
                            <li>
                                <a rel="product-gallery-img" href="<?= $product_image_4?>">
                                    <img src="<?= $product_image_4?>" alt="img1">
                                </a>
                            </li>
                            <?php }?>
                            <?php if($product_image_5) {?>
                            <li>
                                <a rel="product-gallery-img" href="<?= $product_image_5?>">
                                    <img src="<?= $product_image_5?>" alt="img1">
                                </a>
                            </li>
                            <?php }?>
                            <?php if($product_image_6) {?>
                            <li>
                                <a rel="product-gallery-img" href="<?= $product_image_6?>">
                                    <img src="<?= $product_image_6?>" alt="img1">
                                </a>
                            </li>
                            <?php }?>

                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>

<?php
get_footer();
