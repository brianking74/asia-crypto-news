 <?php get_header(); ?> <main class="content-area"> <div class="error-404"> <header
      class="error-header"> <h1 class="error-title">404 - Page Not Found</h1> </header> <div
      class="error-content"> <p>Sorry, the page you are looking for could not be found.</p> <p>This
      might be because:</p> <ul> <li>The page has been moved or deleted</li> <li>You typed
      the URL incorrectly</li> <li>The link you clicked is broken</li> </ul> <p><a
      href="<?php echo esc_url(home_url('/')); ?>" style="color: #FFD700;">Return to
      Homepage</a></p> <div class="search-form"> <h3>Search Our Site</h3> <form
      role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>"> <input type="search"
      name="s" placeholder="Search for crypto news..." value="<?php echo get_search_query(); ?>"> <button
      type="submit">Search</button> </form> </div> </div> </div> </main> <?php
      get_footer(); ?>