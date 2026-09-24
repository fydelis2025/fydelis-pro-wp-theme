<?php
/**
 * Modelo de resumo de postagem
 * 
 * @package Fydelis_Pro
 * @since 1.0.0
 */

if (!defined('ABSPATH')) exit;
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('article-card'); ?>>
    <?php if (has_post_thumbnail()) : ?>
        <a href="<?php the_permalink(); ?>" class="post-thumbnail-link">
            <figure class="post-image">
                <?php the_post_thumbnail('medium', [
                    'alt' => esc_attr(get_the_title()),
                    'loading' => 'lazy'
                ]); ?>
            </figure>
        </a>
    <?php endif; ?>

    <div class="post-content-wrapper">
        <header class="post-header">
            <h2 class="post-title">
                <a href="<?php the_permalink(); ?>" rel="bookmark">
                    <?php the_title(); ?>
                </a>
            </h2>

            <?php if ('post' === get_post_type()) : ?>
                <div class="post-meta">
                    <time datetime="<?php echo esc_attr(get_the_date('c')); ?>">
                        <?php echo esc_html(get_the_date()); ?>
                    </time>
                    <span class="meta-sep">•</span>
                    <?php the_category(', '); ?>
                </div>
            <?php endif; ?>
        </header>

        <div class="post-excerpt">
            <?php
            if (has_excerpt()) :
                the_excerpt();
            else :
                echo wp_trim_words(get_the_content(), 25, '...');
            endif;
            ?>
        </div>

        <footer class="post-footer">
            <a href="<?php the_permalink(); ?>" class="read-more-link">
                <?php esc_html_e('Ler mais', 'fydelis-pro'); ?>
                <span aria-hidden="true"> →</span>
            </a>
        </footer>
    </div>
</article>