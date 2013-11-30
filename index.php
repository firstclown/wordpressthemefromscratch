<!DOCTYPE html>
<html>
<head>
  <title><?php bloginfo('name') ?> <?php wp_title() ?></title>
  <link rel="stylesheet" type="text/css" 
    href="<?php echo get_stylesheet_uri() ?>" media="all">
  <?php wp_head() ?>
</head>
<body>
  <div class="container">
    <header>
      <h1>Welcome to <?php bloginfo('name') ?></h1>
      <h2><?php bloginfo('description') ?></h2>
    </header>
    <?php while ( have_posts() ) : the_post(); ?>
      <article>
        <h2><?php the_title() ?></h2>
        <?php the_content() ?>
      </article>
      <hr>
    <?php endwhile ?>
    <?php wp_footer() ?>
  </div>
</body>
</html>
