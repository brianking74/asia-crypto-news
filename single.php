<?php get_header(); ?> <main class="content-area"> <?php if (have_posts()) : ?> <?php while
      (have_posts()) : the_post(); ?> <article class="post single-post"> <header class="post-header">
      <h1 class="post-title"><?php the_title(); ?></h1> <div class="post-meta"> <span
      class="post-date"><?php echo get_the_date(); ?></span> <span class="post-author">By <?php
      the_author(); ?></span> <span class="post-category">In <?php the_category(', ');
      ?></span> </div> </header> <div class="post-content"> <?php the_content(); ?>
      </div> <footer class="post-footer"> <div class="post-tags"> <?php the_tags('Tags: ', ', ',
      ''); ?> </div> </footer> </article> <nav class="post-navigation"> <div
      class="nav-previous"> <?php previous_post_link('%link', '&larr; Previous Post'); ?> </div>
      <div class="nav-next"> <?php next_post_link('%link', 'Next Post &rarr;'); ?> </div>
      </nav> <?php endwhile; ?> <?php endif; ?> </main> <?php get_footer(); ?>