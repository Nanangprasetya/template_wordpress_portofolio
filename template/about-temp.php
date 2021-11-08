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
 * @package Biscuit
 */

/* Template Name: ABOUT TEMP */

?>

<?php
get_header();
?>
<section id="page" class="content-page">
    <div class="container">
        <main class="wrap">
            <section class="content-area carousel-fade">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <article id="about-temp" class="article-full">
                            <main>
                               <div class="content">
                                   <?php the_content(); ?>
                               </div>
                                <?php get_template_part('includes/theme-sections/bs', 'tools'); ?>
                            </main>
                        </article>
                    <?php endwhile;
                else : ?>
                    <article>
                        <p>Sorry, no page was found!</p>
                    </article>
                <?php endif; ?>
        </main>
    </div>
</section>

<?php get_footer(); ?>