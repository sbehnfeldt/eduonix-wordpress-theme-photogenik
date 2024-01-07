<html <?php language_attributes(); ?>>
<?php get_template_part( 'head' ); ?>

<body <?php body_class(); ?>>
<?php get_template_part( 'header' ); ?>

<div class="w3-row">
    <?php get_template_part( 'sidebar' ); ?>

    <!--    Main -->
    <main class="w3-col m9 l9">
        <?php if ( have_posts() ): ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <?php echo get_template_part( 'content', get_post_format() ); ?>
            <?php endwhile; ?>
        <?php else: ?>
            <?php echo wpautop( 'Sorry, no posts' ); ?>
        <?php endif; ?>
    </main>
</div>

<?php get_template_part( 'footer' ); ?>

</body>
</html>
