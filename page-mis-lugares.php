<?php
/* Template Name: Mis Lugares */
get_header();
?>

<main>
  <h1>Mis Lugares</h1>
  <div class="proyectos-grid">
    <?php
    // Consulta los proyectos (Custom Post Type "proyectos")
    $args = array(
      'post_type' => 'proyectos',
      'posts_per_page' => 3, // Limitar a 3 proyectos
    );
    $query = new WP_Query($args);

    // Si hay proyectos
    if ($query->have_posts()) :
      while ($query->have_posts()) : $query->the_post();
    ?>
        <div class="proyecto-card">
          <?php if (has_post_thumbnail()) : ?>
            <a href="<?php the_permalink(); ?>">
              <?php the_post_thumbnail('medium'); ?>
            </a>
          <?php endif; ?>
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <p><?php the_excerpt(); ?></p>
        </div>
    <?php endwhile; ?>
    <?php else : ?>
      <p>No hay proyectos disponibles.</p>
    <?php endif; wp_reset_postdata(); ?>
  </div>
</main>

<?php
get_footer();
