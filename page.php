<?php
get_header();
?>
<section id="page" class="content-page">
    <div class="container">
        <main class="wrap">
            <section class="content-area carousel-fade">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <article class="article-full">
                            <header>
                                <h1><?php the_title(); ?></h1>
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