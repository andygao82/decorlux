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
$categories = get_the_category();
$product_top_banner_image = get_field('product_top_banner_image');
$product_top_banner_heading = get_field('product_top_banner_content');
?>
<?php if($product_top_banner_image){?>
    <section class="page-banner product-banner cat-<?php echo $categories[0]->cat_ID ?>" style="background-image: url('<?= esc_url($product_top_banner_image)?>')">
<?php }else{?>
    <section class="page-banner product-banner cat-<?php echo $categories[0]->cat_ID ?>">
<?php }?>
        <div class="page-banner-wrapper">
            <?php if($product_top_banner_heading){?>
            <h1 class="page-title"><?php echo $product_top_banner_heading ?></h1>
            <?php } ?>
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
                                <?php the_title() ?>
                            </div>
                            <?php $img_path = get_template_directory_uri('/'); ?>
                            <div class="product-more">
                                <a href="javascript:;" onclick="goBack()"><span>Back</span><?php echo file_get_contents($img_path."/images/arrow.svg"); ?></a>
                            </div>
                            <script>
                                function goBack() {
                                    window.history.back();
                                }
                            </script>
                        </div>

                        <div class="product-detail-description">
	                        <?php if($product_description) {?>
		                        <?= $product_description;  ?>
	                        <?php }else{ ?>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	                        <?php }?>
                            <div class="product-more">
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>contact-us"><span>Book a FREE in-house measure and quote now</span><?php echo file_get_contents($img_path."/images/arrow.svg"); ?></a>
                            </div>
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
                        <h2><span>Image Gallery</span></h2>
                        <ul>
                            <?php for($i = 1; $i <=9; $i++):?>
                                <?php if(get_field('product_image_'.$i.'')) {?>
                                    <?php ${"product_image_".$i} = get_field('product_image_'.$i.'') ?>
                                    <?php if(isset(${"product_image_".$i}['description'])){
                                        $product_image_description = ${"product_image_".$i}['description'];
		                            }else{
			                            $product_image_description = '';
                                    }?>
                                <li>
                                    <a rel="product-gallery-img" href="<?= esc_url(${"product_image_".$i}['sizes']['large'])?>" >
                                        <img src="<?= esc_url(${"product_image_".$i}['sizes']['large'])?>" alt="<?= esc_attr($product_image_description)?>">
                                    </a>
                                </li>
                                <?php }?>
	                        <?php endfor?>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>

<?php
get_footer();
