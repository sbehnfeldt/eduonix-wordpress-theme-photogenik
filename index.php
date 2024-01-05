<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ) ?>">
    <title>PhotoGenik</title>
</head>

<body>
<div class="w3-row">
    <!-- Sidebar -->
    <div class="w3-col m3 l3">
        <ul class="w3-ul">
            <li><a href="#">Nature</a></li>
            <li><a href="#">Animals</a></li>
            <li><a href="#">Objects</a></li>
            <li><a href="#">People</a></li>
            <li><a href="#">Abstract</a></li>
        </ul>
    </div>

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

<header class="w3-container w3-teal">
    <div class="w3-row">
        <div class="w3-col m9 l9">
            <h1><span>Photo</span>Genik</h1>
        </div>
        <div class="w3-col m3 l3">
            <input type="text" class="w3-input" placeholder="Search...">
        </div>
    </div>
</header>


<footer>
    <p>PhotoGenik &copy; 2023</p>
</footer>

</body>
</html>
