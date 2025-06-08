<?php
/*
 * Template Name: Selecting Template
 * Template Post Type: post
 */

get_header();
if (have_rows('selecting_product')):
		while (have_rows('selecting_product')) : the_row();
		$categories = get_the_category();
?>
	<?php if (get_row_layout() == 'main_content'): ?>
	<div class="banner section cat-<?php echo $categories[0]->cat_ID ?>" style="background-image: url('<?= get_sub_field('image')?>')">

	</div>
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
							<h1 class="post-title"><?php echo get_sub_field('product_top_banner_content') ?></h1>
							<div class="archive-description">
								<?php echo get_sub_field('product_description') ?>
							</div>
							<?php if(get_sub_field('pdf_upload')): ?>
								<a class="button" href="<?= get_sub_field('pdf_upload')?>">Details</a>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php endif; ?>
	<?php if (get_row_layout() == 'selecting_section'): ?>
		<div class="section selecting-section">
			<div class="selecting-section-wrapper">
				<div class="selecting-section-content">
					<div class="selecting-selecting-content-wrapper">
						<div class="caption"><?= get_sub_field('selecting_section_caption') ?></div>
						<h2><?= get_sub_field('selecting_section_title') ?></h2>
						<div class="selecting-section-content-text">
							<?= get_sub_field('selecting_section_content') ?>
						</div>
					</div>
					<?php if (get_sub_field('selecting_section_image_3')): ?>
						<div class="selecting-section-image">
							<div class="image-wrapper">
								<img src="<?= get_sub_field('selecting_section_image_3') ?>" alt="<?= get_sub_field('selecting_section_title') ?>">	
							</div>
						</div>
					<?php endif; ?>
				</div>
				<div class="selecting-section-images">
					<div class="image-wrapper design-image">
						<img src="<?= get_sub_field('selecting_section_image_1') ?>" alt="<?= get_sub_field('selecting_section_title') ?>">
					</div>
					<?php if (get_sub_field('selecting_section_image_2')): ?>
						<div class="image-wrapper">	
							<img src="<?= get_sub_field('selecting_section_image_2') ?>" alt="<?= get_sub_field('selecting_section_title') ?>">
						</div>
					<?php endif; ?>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-12 break-line"></div>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<?php if (get_row_layout() == 'links'): ?>
		<div class="section links-section">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="links-section-wrapper">
							<a href="javascript:;" onclick="goBack()">Back</a>
							<a href="<?= get_sub_field('next_page')['url']?>"><?= get_sub_field('next_page')['title']?></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>
<?php endwhile; endif; ?>


<?php
get_footer();
