<?php get_header(); ?> <main class="content-area"> <header class="search-header"> <h1
      class="search-title"> Search Results for: "<?php echo get_search_query(); ?>" </h1> </header>
      <?php if (have_posts()) : ?> <div class="search-results"> <?php while (have_posts()) : the_post();
      ?> <article class="post search-result"> <h2 class="post-title"> <a href="<?php
      the_permalink(); ?>" style="color: #FFD700; text-decoration: none;"> <?php the_title(); ?> </a>
      </h2> <div class="post-meta"> <span class="post-date"><?php echo get_the_date();
      ?></span> <span class="post-category"><?php the_category(', '); ?></span> </div>
      <div class="post-excerpt"> <?php the_excerpt(); ?> </div> <p><a href="<?php
      the_permalink(); ?>" style="color: #00D4FF;">Read More</a></p> </article> <?php
      endwhile; ?> </div> <nav class="pagination"> <?php echo paginate_links(array( 'prev_text' =>
      '&larr; Previous', 'next_text' => 'Next &rarr;' )); ?> </nav> <?php else : ?> <p>No
      results found for "<?php echo get_search_query(); ?>". Try different keywords.</p> <?php endif;
      ?> </main> <?php get_footer(); ?>