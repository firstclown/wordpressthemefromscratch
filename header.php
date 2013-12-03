<!DOCTYPE html>
<html <?php language_attributes() ?> >
<head>
  <meta charset="<?php bloginfo( 'charset' ) ?>" />
  <meta name="viewport" content="width=device-width">
  <meta name="description" content="<?php bloginfo( 'description' ) ?>" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ) ?>" />
  <title><?php bloginfo('name') ?> <?php wp_title() ?></title>
  <link rel="stylesheet" type="text/css" 
    href="<?php echo get_stylesheet_uri() ?>" media="all">
  <?php wp_head() ?>
</head>
<body <?php body_class() ?> >
  <div class="container">
    <header>
      <h1>
        <a href="<?php echo home_url() ?>">
          Welcome to <?php bloginfo('name') ?>
        </a>
      </h1>
      <h2><?php bloginfo('description') ?></h2>
      <?php dynamic_sidebar('header') ?>
      <?php wp_nav_menu(
        array(
          'theme_location' => 'main',
          'container' => 'nav',
          'menu_class' => 'nav nav-pills'
        )
      ) ?>
    </header>
