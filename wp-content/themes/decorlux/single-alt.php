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
	<div class="banner section cat-<?php echo $categories[0]->cat_ID ?>"style="background-image: url('<?= esc_url($product_top_banner_image)?>')"></div>
	<div class="section page-category-top">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="inner-wrapper">
						<a class="back-button" href="javascript:;" onclick="goBack()">
							<span class="material-symbols-outlined icon">arrow_back_ios</span> 
							<span>Back</span>
						</a>
						<div class="page-category-description">
							<h1 class="post-title"><?php the_title() ?></h1>
							<div class="archive-description">
								<?php echo get_field('product_description') ?>
							</div>
							<?php if(get_field('pdf_upload')): ?>
								<a class="button" href="<?= get_field('pdf_upload')?>">Details</a>
							<?php endif; ?>
							<div class="product-items">
								<?php if(get_field('completion')): ?>
									<div class="product-completion product-item">
										<span class="product-item-title">Completion:</span>
										<span class="product-item-detail"><?= get_field('completion')?></span>
									</div>
								<?php endif; ?>
								<?php if(get_field('category')): ?>
									<div class="product-category product-item">
										<span class="product-item-title">Category:</span>
										<span class="product-item-detail"><?= get_field('category')?></span>
									</div>
								<?php endif; ?>
								<?php if(get_field('location')): ?>
									<div class="product-location product-item">
										<span class="product-item-title">Location:</span>
										<span class="product-item-detail"><?= get_field('location')?></span>
									</div>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php for($i = 1; $i <=30; $i++):?>
		<?php if(get_field('product_image_'.$i.'')) :?>
			<?php ${"product_image_".$i} = get_field('product_image_'.$i.'') ?>
			<?php $product_image_description = ${"product_image_".$i}['description'] ?>
			<div class="section selecting-section">
				<div class="selecting-section-wrapper">
					<div class="selecting-section-content">
						<div class="selecting-selecting-content-wrapper">
							<h2><?php echo ${"product_image_".$i}['title'] ?></h2>
							<div class="selecting-section-content-text"><?php echo $product_image_description ?></div>
						</div>
					</div>
					<div class="selecting-section-images">
						<div class="image-wrapper design-image">
							<img src="<?= esc_url(${"product_image_".$i}['sizes']['large'])?>" alt="<?= esc_url(${"product_image_".$i}['title'])?>">
						</div>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-12 break-line"></div>
					</div>
				</div>
			</div>
		
	<?php endif; endfor;?>
	<div></div>
<?php
get_footer();
