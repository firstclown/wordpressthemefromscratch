<?php if ( have_comments() ) : ?>
  <div id="comments" class="well">
    <ul class="comment-list">
      <?php wp_list_comments() ?>
    </ul>
    <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
      <nav id="comment-navigation">
        <?php previous_comments_link() ?>
        <?php next_comments_link() ?>
      </nav>
    <?php endif ?>
  </div>
<?php endif ?>
<?php comment_form() ?>
