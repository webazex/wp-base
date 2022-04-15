<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package Test
 */

get_header();
$content = get_field('content');
if(!empty($content)){
    ?>
    <main>
        <?php
            foreach ($content as $block){
                if($block['acf_fc_layout'] === "slider-logos"){
                    if(!empty($block['slider'])){
	                    $args = [
		                    $block['title'], $block['slider']
	                    ];
	                    get_template_part('sections/slider-logos', '', $args);
                    }
                }elseif($block['acf_fc_layout'] === "dev"){
                    echo $block['text'];
                }
            }
        ?>
    </main>
    <?php
}else{
    ?>
    <main>

    </main>
    <?php
}
get_footer();
?>
