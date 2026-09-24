<?php
/**
 * Barra lateral
 *
 * @package Fydelis_Pro
 * @since 1.0.0
 */

if (!defined('ABSPATH')) exit;
?>

<aside id="secondary" class="widget-area" role="complementary">
    <?php if (is_active_sidebar('sidebar-1')) : ?>
        <?php dynamic_sidebar('sidebar-1'); ?>
    <?php else : ?>
        <section class="widget">
            <h3 class="widget-title"><?php esc_html_e('Buscar', 'fydelis-pro'); ?></h3>
            <?php get_search_form(); ?>
        </section>

        <section class="widget">
            <h3 class="widget-title"><?php esc_html_e('Últimos Posts', 'fydelis-pro'); ?></h3>
            <ul>
                <?php
                $recent_posts = wp_get_recent_posts([
                    'numberposts' => 5,
                    'post_status' => 'publish'
                ]);
                foreach ($recent_posts as $post) :
                ?>
                    <li>
                        <a href="<?php echo esc_url(get_permalink($post['ID'])); ?>">
                            <?php echo esc_html($post['post_title']); ?>
                        </a>
                    </li>
                <?php endforeach; wp_reset_postdata(); ?>
            </ul>
        </section>
    <?php endif; ?>
</aside>