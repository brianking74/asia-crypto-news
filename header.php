<!DOCTYPE html> <html <?php language_attributes(); ?>> <head> <meta charset="<?php
      bloginfo('charset'); ?>"> <meta name="viewport" content="width=device-width, initial-scale=1">
      <title><?php wp_title(); ?></title> <?php wp_head(); ?> </head> <body <?php
      body_class(); ?>> <div class="container"> <header class="site-header"> <h1
      class="site-title"> <a href="<?php echo esc_url(home_url('/')); ?>" style="color: #FFD700;
      text-decoration: none;"> <?php bloginfo('name'); ?> </a> </h1> <p
      class="site-description"><?php bloginfo('description'); ?></p> </header> <nav
      class="main-navigation"> <ul> <li><a href="<?php echo esc_url(home_url('/'));
      ?>">Home</a></li> <li><a href="#">Breaking News</a></li> <li><a
      href="#">Market Analysis</a></li> <li><a href="#">Education</a></li>
      <li><a href="#">Regional Coverage</a></li> <li><a
      href="#">About</a></li> <li><a href="#">Contact</a></li> </ul>
      </nav>