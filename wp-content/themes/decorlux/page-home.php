<?php
/* Template Name: Home Page */
get_header();

?>
<?php
$slider_image_1 = get_field('banner_image_1');
$slider_image_2 = get_field('banner_image_2');
$slider_image_3 = get_field('banner_image_3');

$imagesArray = array($slider_image_1, $slider_image_2, $slider_image_3);
$i = rand(0,2);
$bg = $imagesArray[$i];

?>
    <section class="banner">
        <div class="flexslider">
            <ul class="slides">
                <li style="background-image: url(<?php echo $slider_image_1?>)"></li>
                <li style="background-image: url(<?php echo $slider_image_2?>)"></li>
                <li style="background-image: url(<?php echo $slider_image_3?>)"></li>
            </ul>
        </div>
    </section>
<?php get_footer(); ?>


<script>
    jQuery(document).ready(function($){
        $('#burger-icon').click(function () {
            $('body').toggleClass('menu-down');
        });
        $('.flexslider').flexslider({
            animation: "fade"
        });
    });
</script>
