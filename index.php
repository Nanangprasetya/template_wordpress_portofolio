<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Hikari
 */

/* Template Name: INDEX */

?>

<?php
get_header();
?>

<?php get_template_part('includes/theme-sections/hsi', 'hero-slider'); ?>

<main id="main">
  
  <?php get_template_part('includes/theme-sections/hsi', 'about'); ?>
  <?php get_template_part('includes/theme-sections/hsi', 'service'); ?>
  <?php get_template_part('includes/theme-sections/hsi', 'service-other'); ?>
  <?php get_template_part('includes/theme-sections/hsi', 'product'); ?>
  <?php get_template_part('includes/theme-sections/hsi', 'contact'); ?>

</main>

<?php get_footer(); ?>