<?php get_header() ?>
<div class="row">
  <?php while ( have_posts() ) : the_post(); ?>
    <article <?php post_class('col-md-9') ?>>
      <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
      <?php the_content() ?>
    </article>
  <?php endwhile ?>
  <?php if( ! dynamic_sidebar('page-sidebar') ): ?>
    <div class="col-md-3">Nothing Here</div>
  <?php endif ?>
</div>
<?php get_footer() ?>
