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
        <article class="post">
            <h1>Photo Title</h1>
            <p class="meta">
                Posted at 2:00pm on 03-29-2023 by Stephen.
            </p>
            <hr/>
            <img class="pic w3-animate-right" src="<?= get_template_directory_uri() ?>/images/2.jpg" alt="">
            <div class="w3-row">
                <div class="w3-col l2"></div>
                <a class="w3-btn w3-red" href="/">Back</a>
                <div class="w3-col l10"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus dolorum ea earum exercitationem
                    reiciendis! Cum, ipsum iusto omnis reprehenderit repudiandae vero voluptatibus! Esse eum illo magni
                    nostrum repudiandae sequi, sit.</p>
            </div>

        </article>
    </main>
</div>


<footer>
    <p>PhotoGenik &copy; 2023</p>
</footer>

</body>
</html>
