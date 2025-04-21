<?php
/* Template Name: Página de Contacto */
get_header(); ?>

<main>
    <h2>Contacto</h2>
    <form>
        <label>Nombre:</label><br>
        <input type="text" name="nombre"><br><br>
        <label>Email:</label><br>
        <input type="email" name="email"><br><br>
        <label>Mensaje:</label><br>
        <textarea name="mensaje"></textarea><br><br>
        <button type="submit">Enviar</button>
    </form>
</main>

<?php get_footer(); ?>
