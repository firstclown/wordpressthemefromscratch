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
    </header>
    <?php while ( have_posts() ) : the_post(); ?>
      <article <?php post_class()?> >
        <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
        <?php the_content() ?>
      </article>
      <hr>
    <?php endwhile ?>
    <?php wp_footer() ?>
  </div>
</body>
</html>
