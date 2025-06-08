<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Decorlux
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="wrapper footer-top-wrapper">
						<div class="footer-brief">
							<h3>
								<?php 
									echo get_field('footer_brief_heading', 'option');
								?>
							</h3>
							<div class="footer-brief-content">
								<?php 
									echo get_field('footer_brief_content', 'option');
								?>
							</div>
						</div>
						<div class="footer-quick-links">
							<h3>Quick Links</h3>
							<ul>
								<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>about">About</a></li>
								<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>services">Services</a></li>
								<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>portfolio">Portfolio</a></li>
								<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>contact">Contact</a></li>
							</ul>
						</div>
						<div class="footer-social-media">
							<h3>Follow Us</h3>
							<ul class="social-media">
								<li>
									<a href="https://www.facebook.com/decorlux.curtain" target="_blank">
										<i class="fa fa-facebook-square" aria-hidden="true"></i>
									</a>
								</li>
								<li>
									<a href="https://www.instagram.com/decorlux_homestaging/" target="_blank">
										<i class="fa fa-instagram" aria-hidden="true"></i>
									</a>
								</li>
							</ul>
						</div>
						<div class="footer-address">
							<h3>Showroom Address</h3>
							<div class="address-content">
								<i class="fa fa-map-marker" aria-hidden="true"></i>

								<?php 
									echo get_field('showroom_address', 'option');
								?>
							</div>
							
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="wrapper footer-bottom-wrapper">
						<div class="copyright">Copyright &copy; <?= date('Y') ?> DecorLUX. All Rights Reserved</div>
						<div class="footer-links">
							<ul>
								<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>contact-us">Contact us</a></li>
								<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>terms-conditions">Terms & Conditions</a></li>
								<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>product-warranty">Product Warranty</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
