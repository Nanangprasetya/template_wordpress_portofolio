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

<main id="main">
  
  <?php get_template_part('includes/theme-sections/bs', 'about'); ?>
  <?php get_template_part('includes/theme-sections/bs', 'project'); ?>
  <?php get_template_part('includes/theme-sections/bs', 'project-1'); ?>
  <?php get_template_part('includes/theme-sections/bs', 'project-2'); ?>
  <?php get_template_part('includes/theme-sections/bs', 'project-3'); ?>
  <?php get_template_part('includes/theme-sections/bs', 'tools'); ?>

</main>

<?php get_footer(); ?>