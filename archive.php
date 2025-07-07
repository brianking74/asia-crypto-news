    <?php get_header(); ?> <main class="content-area"> <header class="archive-header"> <h1
      class="archive-title"> <?php if (is_category()) { single_cat_title('Category: '); } elseif (is_tag()) {
      single_tag_title('Tag: '); } elseif (is_date()) { echo 'Archives: '; if (is_year()) { echo get_the_date('Y'); }
      elseif (is_month()) { echo get_the_date('F Y'); } else { echo get_the_date(); } } else { echo 'Archives'; } ?>
      </h1> </header> <?php if (have_posts()) : ?> <div class="posts-grid"> <?php while
      (have_posts()) : the_post(); ?> <article class="post archive-post"> <h2 class="post-title"> <a
      href="<?php the_permalink(); ?>" style="color: #FFD700; text-decoration: none;"> <?php the_title();
      ?> </a> </h2> <div class="post-meta"> <span class="post-date"><?php echo
      get_the_date(); ?></span> <span class="post-category"><?php the_category(', ');
      ?></span> </div> <div class="post-excerpt"> <?php the_excerpt(); ?> </div>
      <p><a href="<?php the_permalink(); ?>" style="color: #00D4FF;">Read More</a></p>
      </article> <?php endwhile; ?> </div> <nav class="pagination"> <?php echo
      paginate_links(array( 'prev_text' => '&larr; Previous', 'next_text' => 'Next &rarr;' )); ?>
      </nav> <?php else : ?> <p>No posts found in this archive.</p> <?php endif; ?>
      </main> <?php get_footer(); ?>