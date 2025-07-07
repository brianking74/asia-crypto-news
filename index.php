<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="container">
        <header class="site-header">
            <h1 class="site-title">
                <a href="<?php echo esc_url(home_url('/')); ?>" style="color: #FFD700; text-decoration: none;">
                    <?php bloginfo('name'); ?>
                </a>
            </h1>
            <p class="site-description"><?php bloginfo('description'); ?></p>
        </header>

        <nav class="main-navigation">
            <ul>
                <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">Education</a></li>
                <li><a href="#">Markets</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>

        <main class="content-area">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <article class="post">
                        <h2 class="post-title">
                            <a href="<?php the_permalink(); ?>" style="color: #FFD700; text-decoration: none;">
                                <?php the_title(); ?>
                            </a>
                        </h2>
                        <div class="post-content">
                            <?php the_excerpt(); ?>
                        </div>
                        <p><a href="<?php the_permalink(); ?>" style="color: #00D4FF;">Read More</a></p>
                    </article>
                <?php endwhile; ?>
            <?php else : ?>
                <p>Welcome to Asia Crypto News - Your premier source for cryptocurrency and AI news across Asian markets!</p>
            <?php endif; ?>
        </main>

        <footer class="site-footer">
            <p>&copy; <?php echo date('Y'); ?> Asia Crypto News. All rights reserved.</p>
        </footer>
    </div>

    <?php wp_footer(); ?>
</body>
</html>