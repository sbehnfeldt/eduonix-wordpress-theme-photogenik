<header class="w3-container w3-teal">
    <div class="w3-row">
        <div class="w3-col m9 l9">
            <h1><?php bloginfo( 'name' ); ?></h1>
        </div>
        <div class="w3-col m3 l3">
            <form method="get" action="<?php echo esc_url(home_url('/')); ?>">
                <input type="text" name="s" class="w3-input" placeholder="Search...">
            </form>
        </div>
    </div>
</header>
