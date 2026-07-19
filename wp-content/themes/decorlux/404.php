<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Decorlux
 */

get_header();
?>

	<div class="section header-section error-404-section">
		<div class="container">
			<div class="row">
				<div class="col">
					<h2>Page Not Found</h2>
					<div class="break-line"></div>
					<div class="header-content">
						<div class="header-content-wrapper">
							<div class="error-404-code">404</div>
							<p>The page you're looking for may have been moved, or it no longer exists. Return to the homepage to keep browsing, or get in touch with us &mdash; we're happy to help.</p>
							<div class="error-404-actions">
								<a class="button" href="<?php echo esc_url( home_url( '/' ) ); ?>">Back to Home</a>
								<a class="button" href="<?php echo esc_url( home_url( '/' ) ); ?>contact-us">Contact Us</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php
get_footer();
