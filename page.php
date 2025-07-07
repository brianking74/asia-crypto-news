
      <?php get_header(); ?> <main class="content-area"> <?php if (have_posts()) : ?> <?php while
      (have_posts()) : the_post(); ?> <article class="page"> <header class="page-header"> <h1
      class="page-title"><?php the_title(); ?></h1> </header> <div class="page-content">
      <?php the_content(); ?> </div> </article> <?php endwhile; ?> <?php endif; ?>
      </main> <?php get_footer(); ?>