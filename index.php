<html <?php language_attributes(); ?>>
<?php get_template_part( 'head' ); ?>

<body <?php body_class(); ?>>
<?php get_template_part( 'header' ); ?>

<div class="w3-row">
    <?php get_template_part( 'sidebar' ); ?>
    <main class="w3-col m9 l9">
        <div class="w3-row">
            <div class="w3-col m4 l4 pic">
                <a href="single.php">
                    <img class="w3-animate-opacity" src="<?= get_template_directory_uri() ?>/images/1.jpg" alt="">
                </a>
                <p>Earum, hic necessitatibus!</p>
            </div>
            <div class="w3-col m4 l4 pic">
                <img class="w3-animate-opacity" src="<?= get_template_directory_uri() ?>/images/2.jpg" alt="">
                <p>Cupiditate, ex in laboriosam libero quis quos saepe. Eligendi neque repellat tempore.
                    Animi, enim?</p>
            </div>
            <div class="w3-col m4 l4 pic">
                <img class="w3-animate-opacity" src="<?= get_template_directory_uri() ?>/images/3.jpg" alt="">
                <p>Cupiditate, ex in laboriosam libero quis quos saepe. Eligendi neque repellat tempore.
                    Animi, enim?</p>

            </div>
            <div class="w3-col m4 l4 pic">
                <img class="w3-animate-opacity" src="<?= get_template_directory_uri() ?>/images/4.jpg" alt="">
                <p>Earum, hic necessitatibus! Aperiam
                    assumenda atque delectus dolorum enim harum ipsam iure nam nobis non perspiciatis quis
                    reprehenderit, saepe sed sequi! Dolore!</p>
            </div>
            <div class="w3-col m4 l4 pic">
                <img class="w3-animate-opacity" src="<?= get_template_directory_uri() ?>/images/5.jpg" alt="">
                <p>Ab, consequuntur, quas. Aliquam ipsam nam
                    odit rem? Cupiditate, ex in laboriosam libero quis quos saepe. Eligendi neque repellat tempore.
                    Animi, enim?</p>
            </div>
            <div class="w3-col m4 l4 pic">
                <img class="w3-animate-opacity" src="<?= get_template_directory_uri() ?>/images/6.jpg" alt="">
                <p>Aliquid amet cumque deserunt dignissimos
                    eos harum iure minima nesciunt omnis, quo, ratione, repudiandae unde veniam! Culpa minima quae
                    quisquam reiciendis voluptas.</p>

            </div>
        </div>
    </main>
</div>

<?php get_template_part( 'footer' ); ?>

</body>
</html>
