<?php
/**
 * Base page template
 *
 * @package WordPress
 * @subpackage TejoMaya
 * @since 1.0.0
 *
 * @link    https://developer.wordpress.org/themes/template-files-section/page-template-files/
 */

 get_header();

 $body_background = get_field('body_background', get_the_ID());
 
 ?>
 
 <main id="main" class="site-main <?php echo 'bg-'. $body_background ?>" role="main">
     <?php the_content(); ?>
 </main>
 
 <?php get_footer(); ?>