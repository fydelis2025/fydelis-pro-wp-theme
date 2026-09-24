<?php
/**
 * Resultados de Busca
 *
 * @package Fydelis_Pro
 * @since 1.0.0
 */

if (!defined('ABSPATH')) exit;

get_header(); ?>

<div class="container">
    <main id="primary" class="content-area">
        <header class="search-header">
            <h1 class="search-title">
                <?php
                printf(
                    esc_html__('Resultados para: %s', 'fydelis-pro'),
                    '<span>' . get_search_query() . '</span>'
                );
                ?>
            </h1>
        </header>

        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
                get_template_part('template-parts/content', 'excerpt');
            endwhile;

            the_posts_pagination([
                'prev_text' => '← ' . __('Anterior', 'fydelis-pro'),
                'next_text' => __('Próximo', 'fydelis-pro') . ' →',
            ]);
        else :
        ?>
            <div class="no-results">
                <p><?php esc_html_e('Nada foi encontrado. Tente buscar novamente com palavras-chave diferentes.', 'fydelis-pro'); ?></p>
                <?php get_search_form(); ?>
            </div>
        <?php endif; ?>
    </main>
    <?php get_sidebar(); ?>
</div>

<?php get_footer();