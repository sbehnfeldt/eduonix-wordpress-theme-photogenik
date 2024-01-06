<html <?php language_attributes(); ?>>
<?php get_template_part( 'head' ); ?>

<body <?php body_class(); ?>>
<?php get_template_part( 'header' ); ?>

<div class="w3-row">
    <?php get_template_part( 'sidebar' ); ?>

    <?php if ( have_posts() ): ?>
    <main class="w3-col m9 l9">
        <div class="w3-row">
    <?php $count = 0; ?>
        <?php while ( have_posts() ) : the_post(); $count++;?>
            <?php get_template_part( 'content', get_post_format() ); ?>
        <?php endwhile; ?>
        </div>
        <h1>Count: <?php echo $count; ?></h1>
    </main>
    <?php else: ?>
        <?php echo wpautop( 'Sorry, no posts' ); ?>
    <?php endif; ?>

</div>

<?php get_template_part( 'footer' ); ?>

</body>
</html>
