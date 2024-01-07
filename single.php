<?php global $id; ?>
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
                <article class="post">
                    <p class="meta">
                        Posted at <?php the_time(); ?>
                        on <?php the_date(); ?>
                        by <a
                            href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a>
                    </p>
                    <hr>

                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="post-thumbnail">
                            <h2><?php the_title(); ?></h2>

                            <?php
                            $attr = [
                                'class' => 'w3-animate-right'
                            ]
                            ?>
                            <?php echo get_the_post_thumbnail( $id, 'large', $attr ); ?>
                        </div>
                    <?php endif; ?>


                    <div class="w3-row">
                        <div class="w3-col l2">
                            <br>
                            <a href="<?php echo site_url(); ?>" class="w3-btn w3-red">Back</a>
                        </div>
                        <div class="w3-col l10">
                            <h1><?php the_title(); ?></h1>
                            <?php the_content(); ?>
                        </div>
                    </div>
                </article>
            <?php endwhile; ?>
        <?php else: ?>
            <?php echo wpautop( 'Sorry, no posts' ); ?>
        <?php endif; ?>
    </main>
</div>

<?php get_template_part( 'footer' ); ?>

</body>
</html>
