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
<div style="padding:66.6% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/851546482?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479&amp;autoplay=1&amp;muted=1&amp;loop=1" frameborder="0" allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media" style="position:absolute;top:0;left:0;width:100%;height:100%;" title="2K_20092_Rev0"></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
<?php get_footer(); ?>


<script>
    jQuery(document).ready(function($){
   
        $('.flexslider').flexslider({
            animation: "fade"
        });
    });
</script>
