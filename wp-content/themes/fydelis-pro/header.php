<?php if (!defined('ABSPATH')) exit; ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header" role="banner">
    <div class="container">
        <?php if (has_custom_logo()) : ?>
            <div class="logo"><?php the_custom_logo(); ?></div>
        <?php else : ?>
            <a href="<?php echo esc_url(home_url('/')); ?>" class="site-name">
                <?php bloginfo('name'); ?>
            </a>
        <?php endif; ?>

        <nav class="main-nav" role="navigation">
            <?php wp_nav_menu([
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => 'nav-menu'
            ]); ?>
        </nav>
    </div>
</header>
<main class="site-content">