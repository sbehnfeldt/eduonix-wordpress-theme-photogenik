<?php global $id; ?>
<div class="w3-col m4 l4 pic">
    <?php if ( has_post_thumbnail() ) : ?>
        <div class="post-thumbnail">
            <h2><?php the_title(); ?></h2>

            <?php
            $attr = [
                'class' => 'w3-animate-opacity w3-hover-opacity'
            ]
            ?>
            <a href="<?php the_permalink(); ?>">
                <?php echo get_the_post_thumbnail( $id, 'large', $attr ); ?>
            </a>
        </div>
    <?php endif; ?>
    <?php the_content(); ?>
</div>
