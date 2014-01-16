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
      <div class="post-content">
        <?php the_content(); ?>
        <?php wp_link_pages(); ?>
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