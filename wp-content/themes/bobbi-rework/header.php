<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<header class="site-header">
    <?php if(is_page('25')) { ?>
    <img class="top-left-image flower-replace" src="<?php echo get_theme_file_uri('images/flower.png'); ?>" alt="">
    <?php } else { ?>
    <img class="top-left-image headshot" src="<?php echo get_theme_file_uri('images/headshot.jpg'); ?>" alt="">
    <?php } ?>
    <div class="container header-row">
        <span class="header-line"></span>      
        <div class="site-title">
            <?php if(is_page('25')) { ?>
            <img class="headshot-small-screen" src="<? echo get_theme_file_uri('images/flower.png'); ?>" alt=""> 
            <?php } else { ?>
            <img class="headshot-small-screen" src="<?php echo get_theme_file_uri('images/headshot.jpg'); ?>" alt="">
            <?php } ?>
            <h1 class="site-title-text"><a href="<?php echo site_url(); ?>">ROBERTA SCHNORR</a></h1>
        </div>
        <nav class="site-nav">
            <ul>
                <li <?php if (is_page('about') or wp_get_post_parent_id(0) == 13) echo 'class="current-menu-item"'; ?>><a href="<?php echo site_url('/about') ?>">About</a></li>
                <li <?php if (is_page('book') or wp_get_post_parent_id(0) == 25) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/book'); ?>">Book</a></li>
                <li><a href="https://rschnorr.substack.com/">Substack</a></li>
            </ul>
        </nav>
        </div>
    </div>

</header>
<body <?php body_class(); ?>>
