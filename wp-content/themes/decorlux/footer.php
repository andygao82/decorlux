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
					<div class="wrapper">
						<div class="footer-brief">
							<h3>About Decorlux</h3>
							<p></p>
						</div>
						<div class="footer-quick-link">
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
									<a href="https://www.instagram.com/decorlux_homestaging/" target="_blank">
										<i class="fa fa-instagram" aria-hidden="true"></i>
									</a>
								</li>
								<li>
									<a href="https://www.facebook.com/decorlux.curtain" target="_blank">
										<i class="fa fa-facebook" aria-hidden="true"></i>
									</a>
								</li>
							</ul>
						</div>
						<div class="address">
							<p>185 Cheltenham Rd, Keysborough VIC 3173</p>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="wrapper">
						<div class="copyright">Copyright &copy; <?= date('Y') ?> DecorLUX. All Rights Reserved</div>
						<div class="footer-links">
							<ul>
								<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>privacy-policy">Contact us</a></li>
								<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>terms-and-conditions">Terms & Conditions</a></li>
								<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>privacy-policy">Privacy Warranty</a></li>
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
