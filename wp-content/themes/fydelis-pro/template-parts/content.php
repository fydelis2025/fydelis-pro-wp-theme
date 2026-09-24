<?php if (!defined('ABSPATH')) exit; ?>
<article id="post-<?php the_ID(); ?>" <?php post_class('article-card'); ?>>
    <?php if (is_single() && has_post_thumbnail()) : ?>
        <figure class="post-image">
            <?php the_post_thumbnail('large', ['alt' => esc_attr(get_the_title())]); ?>
        </figure>
    <?php endif; ?>

    <header class="post-header">
        <?php if (!is_single()) : ?>
            <h2 class="post-title">
                <a href="<?php the_permalink(); ?>" rel="bookmark">
                    <?php the_title(); ?>
                </a>
            </h2>
        <?php else : ?>
            <h1 class="post-title"><?php the_title(); ?></h1>
        <?php endif; ?>

        <?php if ('post' === get_post_type()) : ?>
            <div class="post-meta">
                <time datetime="<?php echo esc_attr(get_the_date('c')); ?>">
                    <?php echo esc_html(get_the_date()); ?>
                </time>
                <span>•</span>
                <?php the_category(', '); ?>
            </div>
        <?php endif; ?>
    </header>

    <div class="post-body">
        <?php
        if (is_single()) :
            the_content();
            wp_link_pages(['before' => '<div class="page-links">Páginas:']);
        else :
            the_excerpt();
            echo '<a href="' . esc_url(get_permalink()) . '" class="read-more">Leia mais →</a>';
        endif;
        ?>
    </div>
</article>