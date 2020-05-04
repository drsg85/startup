<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/tiny-slider.css">
    <title>Startup</title>

    <?php wp_head(); ?>

</head>

<body>
    <header class="hero" style="background-image: url('<?php the_field('header-bg'); ?>')">
        <div class="hero__top">
            <!-- <p class="hero__logo">Startup</p> -->
            <div class="logo">
                <a class="hero__logo" href="<?php bloginfo('url') ?>">
                    <?php the_field('header-logo'); ?>
                </a>
            </div>
            <div class="hero__nav hero__nav--hidden">

                <nav class="main-nav">
                    <ul class="main-nav__list">
                        <li class="main-nav__item"><a class="main-nav__link smooth-trigger" href="<?php echo home_url(); ?>"><?php the_field('menu-button__first'); ?></a></li>
                        <li class="main-nav__item"><a class="main-nav__link smooth-trigger" href="<?php echo esc_url(home_url('#services')); ?>"><?php the_field('menu-button__second'); ?></a></li>
                        <li class="main-nav__item"><a class="main-nav__link smooth-trigger" href="<?php echo esc_url(home_url('#aboutus')); ?>"><?php the_field('menu-button__third'); ?></a></li>
                        <li class="main-nav__item"><a class="main-nav__link smooth-trigger" href="<?php echo esc_url(home_url('#works')); ?>"><?php the_field('menu-button__fourth'); ?></a></li>
                        <li class="main-nav__item"><a class="main-nav__link smooth-trigger" href="<?php echo esc_url(home_url('#blog')); ?>"><?php the_field('menu-button__fifth'); ?></a></li>
                        <li class="main-nav__item"><a class="main-nav__link smooth-trigger" href="<?php echo esc_url(home_url('#clients')); ?>"><?php the_field('menu-button__sixth'); ?></a></li>
                        <li class="main-nav__item"><a class="main-nav__link smooth-trigger" href="<?php echo esc_url(home_url('#contact')); ?>"><?php the_field('menu-button__seventh'); ?></a></li>
                    </ul>
                </nav>
            </div>
            <div class="menu-button">
                <div class="menu-button__middle"></div>
            </div>
        </div>
        <div class="hero__content">
            <div class="hero-caption">
                <h1 class="hero-caption__title"><?php the_field('header-title'); ?></h1>
                <p class="hero-caption__subtitle"><?php the_field('header-subtitle'); ?></p>
            </div>
            <div class="hero__button"><a class="button smooth-trigger" href="#contact"><?php the_field('header-button'); ?></a></div>
        </div>
    </header>