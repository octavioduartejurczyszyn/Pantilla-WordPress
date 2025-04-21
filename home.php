<?php get_header(); ?>

<main>
    <h2>Últimas entradas</h2>

    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            echo '<article>';
            the_title('<h3>', '</h3>');
            the_excerpt();
            echo '<a href="' . get_permalink() . '">Leer más</a>';
            echo '</article>';
        endwhile;
    else :
        echo '<p>No hay publicaciones todavía.</p>';
    endif;
    ?>
</main>

<aside>
    <?php if (is_active_sidebar('sidebar-1')) :
        dynamic_sidebar('sidebar-1');
    endif; ?>
</aside>

<?php if (is_active_sidebar('sidebar-principal')) : ?>
  <aside class="sidebar">
    <?php dynamic_sidebar('sidebar-principal'); ?>
  </aside>
<?php endif; ?>

<?php get_footer(); ?>


