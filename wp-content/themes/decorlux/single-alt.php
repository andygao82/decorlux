<?php
/*
 * Template Name: New Template
 * Template Post Type: post
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
        <img src="<?php echo get_template_directory_uri('/'); ?>/images/mouse.svg" alt="mouse" id="mouse">
	</div>
	</section>
    <section class="product-details">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="wrapper">
                        <div class="product-detail-left">
                            <div class="product-cat"><?php echo $categories[0]->name; ?></div>
                            <div class="product-range"><?php the_title() ?></div>
							<?php $img_path = get_template_directory_uri('/'); ?>
                            <div class="product-more">
                                <a class="product-detail-button" href="javascript:;" onclick="goBack()"><span>Back</span></a>
                            </div>
							<?php if(get_field('pdf_upload')): ?>
                            <div class="product-details-file">
                                <a class="product-detail-button" href="<?= get_field('pdf_upload')?>" target="_blank"><span>Details</span></a>
                            </div>
                            <?php endif ?>
                        </div>
						<?php if(get_field('main_image')): ?>
                            <div class="product-detail-right">
                                <div class="product-detail-right-wrapper">
                                    <img src="<?= get_field('main_image') ?>" alt="<?php the_title() ?>" title="<?php the_title() ?>">
                                </div>
                            </div>
						<?php endif ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<section class="listing-section">
			<div class="wrapper">
				<ul>
					<?php for($i = 1; $i <=30; $i++):?>
						<?php if(get_field('product_image_'.$i.'')) {?>
							<?php ${"product_image_".$i} = get_field('product_image_'.$i.'') ?>
							<?php $product_image_description = ${"product_image_".$i}['description'] ?>
							<li>
								<div class="wrapper">
									<div class="listing-item-content">
										<div class="inner-wrapper">
											<h2><?php echo ${"product_image_".$i}['title'] ?></h2>
											<div class="listing-item-description"><?php echo $product_image_description ?></div>
										</div>
									</div>
									<div class="listing-item-img">
										<img src="<?= esc_url(${"product_image_".$i}['sizes']['large'])?>" alt="<?= esc_url(${"product_image_".$i}['title'])?>">
									</div>
								</div>
							</li>
						<?php }?>
					<?php endfor?>
				</ul>
			</div>
	</section>
<?php
get_footer();
