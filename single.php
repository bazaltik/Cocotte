<?php get_header(); ?>
<div class="grid-container">
  <div class="main single grid-80 mobile-grid-100">
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <article class="post">
      <header>
        <a href="<?php the_permalink(); // Get the link to this post ?>" title="<?php the_title(); ?>">
          <h1 class="post-title"><?php the_title(); ?></h1>
        </a>
      </header>
      <ul class="post-info">
        <li class="date">
          <i class="fa fa-clock-o"></i> <time pubdate datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('F jS, Y'); // Display the time it was published see http://codex.wordpress.org/Formatting_Date_and_Time for formatting ?></time>
        </li>
        <li>
          <i class="fa fa-tags"></i> <?php echo get_the_category_list( ',&nbsp;', ', &nbsp;' ); // Display the categories this post belongs to, as links ?>
        </li>
        <?php if( comments_open() ) : // If we have comments open on this post, display a link and count of them ?>
        <li>
          <i class="fa fa-comment"></i> <?php comments_popup_link( __( 'Comment', 'break' ), __( '1 Comment', 'break' ), __( '% Comments', 'break' ) ); ?>
        </li>
      <?php endif; ?>
    </ul>
    <div class="post-content">
      <?php the_content('[.....]'); ?>
      <?php wp_link_pages(); ?>
    </div>
    <div class="post-comments">
      <?php
          // If comments are open or we have at least one comment, load up the default comment template provided by Wordpress
      if ( comments_open() || '0' != get_comments_number() )
        comments_template( '', true );
      ?>
    </div>
  </article>
<?php endwhile; ?>
<?php else : // If there are no posts to display ?>
  <article class="post error">
    <h1 class="404">Nothing has been posted like that yet</h1>
  </article>
<?php endif; ?>
</div>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>