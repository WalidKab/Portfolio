<?php get_header() ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h1 class="h1-list">Nom du projet:</h1>

    <?php the_content() ?>
<?php endwhile;
endif; ?>

<?php get_footer() ?>