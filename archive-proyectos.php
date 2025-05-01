<?php get_header(); ?>

<main>
  <h1>Proyectos</h1>
  <div class="proyectos-grid">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <article class="proyecto-card">
        <?php if (has_post_thumbnail()) : ?>
          <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('medium'); ?>
          </a>
        <?php endif; ?>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p><?php the_excerpt(); ?></p>
      </article>
    <?php endwhile; endif; ?>
  </div>
</main>

<?php get_footer(); ?>



