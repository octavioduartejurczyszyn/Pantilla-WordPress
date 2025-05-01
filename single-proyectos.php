<?php get_header(); ?>

<main>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="proyecto-detalle">
            <h1><?php the_title(); ?></h1> 
            <?php if (has_post_thumbnail()) : ?>
                <div class="proyecto-imagen">
                    <?php the_post_thumbnail('full'); ?> 
                </div>
            <?php endif; ?>
            <div class="proyecto-contenido">
                <?php the_content(); ?> 
            </div>
        </article>
    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
