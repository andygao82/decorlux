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
                        <span class="copyright">Copyright &copy; <?= date('Y') ?> DecorLUX. All Rights Reserved</span>
                        <span>Website by D&D Creative</span>
	                    <?php $img_path = get_template_directory_uri('/'); ?>
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

                </div>
            </div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
