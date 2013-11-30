<?php get_header() ?>
  <h3>Archive for 
    <?php if ( is_category() ) : ?>
      <?php single_cat_title() ?>
    <?php elseif ( is_tag() ) : ?>
      <?php single_tag_title() ?>
    <?php elseif ( is_day() ) : ?>
      <?php echo get_the_date() ?>
    <?php elseif ( is_month() ) : ?>
      the Month of <?php echo get_the_date('F Y') ?>
    <?php elseif ( is_year() ) : ?>
      the Year <?php echo get_the_date('Y') ?>
    <?php else : ?>
      Selection
    <?php endif ?>
  </h3>
  <?php while ( have_posts() ) : the_post(); ?>
    <article <?php post_class() ?>>
      <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
      <?php the_excerpt() ?>
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
<?php get_footer() ?>
