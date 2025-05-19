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

<?php get_footer(); ?>


<script>
    jQuery(document).ready(function($){
   
        $('.flexslider').flexslider({
            animation: "fade"
        });
    });
</script>
