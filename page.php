<?php
get_header();
?>
<section id="page" class="content-page bg-white">
    <div class="container">
        <main class="wrap">
            <section class="content-area carousel-fade">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <article class="article-full">
                            <header>
                                <h2><?php the_title(); ?></h2>
                            </header>
                            <main>
                                <?php the_content(); ?>
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