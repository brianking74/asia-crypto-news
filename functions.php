<?php function asia_crypto_news_setup() { // Add theme support add_theme_support('title-tag');
      add_theme_support('post-thumbnails'); add_theme_support('html5', array('search-form', 'comment-form',
      'comment-list')); add_theme_support('automatic-feed-links'); // Register navigation menus
      register_nav_menus(array( 'primary' => 'Primary Menu', 'footer' => 'Footer Menu' )); // Add custom image sizes
      add_image_size('crypto-news-thumb', 300, 200, true); add_image_size('crypto-news-large', 800, 400, true); }
      add_action('after_setup_theme', 'asia_crypto_news_setup'); function asia_crypto_news_styles() {
      wp_enqueue_style('asia-crypto-news-style', get_stylesheet_uri()); } add_action('wp_enqueue_scripts',
      'asia_crypto_news_styles'); // Register sidebar function asia_crypto_news_widgets_init() { register_sidebar(array(
      'name' => 'Primary Sidebar', 'id' => 'primary-sidebar', 'description' => 'Main sidebar for Asia Crypto News',
      'before_widget' => '<div class="widget">', 'after_widget' => '</div>', 'before_title' => '<h3
      class="widget-title">', 'after_title' => '</h3>' )); } add_action('widgets_init',
      'asia_crypto_news_widgets_init'); // Custom excerpt length function asia_crypto_news_excerpt_length($length) {
      return 30; } add_filter('excerpt_length', 'asia_crypto_news_excerpt_length'); // Custom excerpt more text function
      asia_crypto_news_excerpt_more($more) { return '...'; } add_filter('excerpt_more',
      'asia_crypto_news_excerpt_more'); // Add custom post types for crypto news function asia_crypto_news_post_types()
      { // Market Analysis post type register_post_type('market_analysis', array( 'labels' => array( 'name' => 'Market
      Analysis', 'singular_name' => 'Market Analysis' ), 'public' => true, 'supports' => array('title', 'editor',
      'thumbnail', 'excerpt'), 'menu_icon' => 'dashicons-chart-line' )); // Educational Content post type
      register_post_type('crypto_education', array( 'labels' => array( 'name' => 'Crypto Education', 'singular_name' =>
      'Education Article' ), 'public' => true, 'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
      'menu_icon' => 'dashicons-book' )); } add_action('init', 'asia_crypto_news_post_types'); // Add custom categories
      for regions function asia_crypto_news_taxonomies() { register_taxonomy('region', 'post', array( 'labels' => array(
      'name' => 'Regions', 'singular_name' => 'Region' ), 'public' => true, 'hierarchical' => true )); }
      add_action('init', 'asia_crypto_news_taxonomies'); ?>