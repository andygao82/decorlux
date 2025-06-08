<?php
/* Template Name: Terms conditions Page */
get_header();

?>


	<div class="section banner terms-banner" style="background-image: url('<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' ); ?>');"></div>

	<section class="page-main-content terms-main-content">
		<div class="container">
			<div class="row">
				<div class="col">
					<h1 class="post-title"><?php the_title() ?></h1>
					<div class="break-line"></div>
					<div class="main-content">
						<?= get_field('terms_and_conditions_content') ?>
					</div>
				</div>
			</div>
		</div>
	</section>


<?php get_footer(); ?>
