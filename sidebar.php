
      <aside class="sidebar"> <div class="widget"> <h3 class="widget-title">Latest Crypto
      News</h3> <ul> <?php $recent_posts = wp_get_recent_posts(array( 'numberposts' => 5, 'post_status'
      => 'publish' )); foreach($recent_posts as $post) : ?> <li> <a href="<?php echo
      get_permalink($post['ID']); ?>"> <?php echo $post['post_title']; ?> </a> </li> <?php
      endforeach; wp_reset_query(); ?> </ul> </div> <div class="widget"> <h3
      class="widget-title">Categories</h3> <ul> <?php wp_list_categories(array('title_li' => ''));
      ?> </ul> </div> <div class="widget"> <h3 class="widget-title">Newsletter</h3>
      <p>Subscribe to get the latest crypto news from Asia.</p> <form class="newsletter-form">
      <input type="email" placeholder="Enter your email" required> <button
      type="submit">Subscribe</button> </form> </div> </aside>