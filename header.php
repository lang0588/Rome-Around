<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <!-- stylesheet for bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

    <!-- Bootstrap - Navbar -->
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="<?php echo home_url(); ?>">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item <?php if(is_front_page()) echo 'active'; ?>">
                <a class="nav-link" href="<?php echo home_url(); ?>">Home</a>
            </li>
            <li class="nav-item <?php if(is_page('attractions')) echo 'active'; ?>">
                <a class="nav-link" href="<?php echo home_url('/attractions'); ?>">Attractions</a>
            </li>
            <li class="nav-item <?php if(is_page('events')) echo 'active'; ?>">
                <a class="nav-link" href="<?php echo home_url('/events'); ?>">Events</a>
            </li>
            <li class="nav-item <?php if(is_page('hotels')) echo 'active'; ?>">
                <a class="nav-link" href="<?php echo home_url('/hotels'); ?>">Hotels</a>
            </li>
        </ul>
    </div>
</nav>

<!-- Header -->
<header id="site-header">
    <div class="hero-banner" style="background-image: url('<?php echo get_theme_file_uri('assets/images/colosseum.webp'); ?>');">
        <div class="hero-content">
            <h1>Welcome to Our Site</h1>
            <p>Discover our world of creativity and innovation.</p>
        </div>
    </div>
</header>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>