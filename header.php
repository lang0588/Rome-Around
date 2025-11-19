<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">  
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">    

</head>
<body <?php body_class(); ?>>

<!-- Hero Banner -->
<header id="hero-banner" class="text-center text-white d-flex align-items-center justify-content-center">
    <div class="hero-content">
        <h1>Welcome to Our Site</h1>
        <p>Discover attractions, events, and hotels!</p>
        <a href="<?php echo home_url('/attractions'); ?>" class="btn btn-primary btn-lg">Explore Now</a>
    </div>
</header>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg custom-navbar" role="navigation">
    <div class="container">
        <a class="navbar-brand" href="<?php echo home_url(); ?>">
            <?php bloginfo('name'); ?>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav"
                aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="mainNav">
            <ul class="navbar-nav">
                <li class="nav-item <?php if(is_front_page()) echo 'active'; ?>">
                    <a class="nav-link" href="<?php echo home_url(); ?>" aria-current="<?php if(is_front_page()) echo 'page'; ?>">Home</a>
                </li>
                <li class="nav-item <?php if(is_page('attractions')) echo 'active'; ?>">
                    <a class="nav-link" href="<?php echo home_url('/attractions'); ?>" aria-current="<?php if(is_page('attractions')) echo 'page'; ?>">Attractions</a>
                </li>
                <li class="nav-item <?php if(is_page('events')) echo 'active'; ?>">
                    <a class="nav-link" href="<?php echo home_url('/events'); ?>" aria-current="<?php if(is_page('events')) echo 'page'; ?>">Events</a>
                </li>
                <li class="nav-item <?php if(is_page('hotels')) echo 'active'; ?>">
                    <a class="nav-link" href="<?php echo home_url('/hotels'); ?>" aria-current="<?php if(is_page('hotels')) echo 'page'; ?>">Hotels</a>
                </li>
            </ul>

            <!-- Search Form -->
            <form class="navbar-search" role="search" method="get" action="<?php echo home_url('/'); ?>">
            <input type="search" name="s" placeholder="Search..." value="<?php echo get_search_query(); ?>">
            <button type="submit">Go</button>
        </form>
        </div>
    </div>
</nav>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
