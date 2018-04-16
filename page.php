<!-- Définit la façon dont les pages sont affichées. -->

<?php get_header(); ?>
<main class="wrap">
  <section class="content-area content-thin title">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article class="article-full">
      <header>
        <h2>
          <?php the_title(); ?>
        </h2>
      </header>
    </article>
    <?php endwhile; else : ?>
    <article>
      <p>Sorry, no page was found!</p>
    </article>
    <?php endif; ?>
  </section>
  <?php get_sidebar(); ?>
  <!-- Affichage des articles -->
</main>
<?php get_footer(); ?>
