<?php get_header(); ?>
<main class="wrap">
    <section class="content-area content-thin index">
        <h3>LATEST POSTS</h3>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article class="article-loop">
            <header>

                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    <!-- Sort l’URL correcte de l’article actuelle & affiche le titre de l’article dans un format sécurisé pour l’attribut titre du lien -->
                    <p>
                        <?php the_post_thumbnail();?>
                    </p>
                    <h4>
                        <?php the_tags('', 'separator', ''); ?> </h4>
                    <h5>
                        <?php the_title(); ?>
                    </h5>
                    <!-- Affiche le titre de l’article -->
                </a>

            </header>
            <?php the_excerpt(); ?>
            <!-- Sort l’extrait du message, qui est généré automatiquement si vous n’écrivez pas le vôtre -->
        </article>
        <?php endwhile; else : ?>
        <article>
            <p>Sorry, no posts were found!</p>
        </article>
        <?php endif; ?>
    </section>
    <?php get_sidebar(); ?>
</main>
<?php get_footer(); ?>
