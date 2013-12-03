<?php get_header() ?>
<div class="row">
  <?php while ( have_posts() ) : the_post(); ?>
    <?php if( is_active_sidebar('blog-sidebar') ): ?>
      <article <?php post_class('col-md-9') ?>>
    <?php else: ?>
      <article <?php post_class('col-md-12') ?>>
    <?php endif ?>
      <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
      <?php the_content() ?>
      <small>
        <section>
          <strong><?php the_author_link() ?></strong><br>
          <?php the_date() ?><br>
          Categories: <?php the_category(', ') ?><br>
          <?php the_tags() ?>
        </section>
      </small>
    </article>
  <?php endwhile ?>
  <?php dynamic_sidebar('blog-sidebar') ?>
</div>
<?php get_footer() ?>
