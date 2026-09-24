<?php
/**
 * Template de Post Individual
 *
 * @package Fydelis_Pro
 * @since 1.0.0
 */

if (!defined('ABSPATH')) exit;

get_header(); ?>

<div class="container">
    <main id="primary" class="content-area">
        <?php
        while (have_posts()) : the_post();

            get_template_part('template-parts/content', get_post_format());

            // Navegação entre posts
            the_post_navigation([
                'prev_text' => '<span class="nav-label">' . __('Anterior', 'fydelis-pro') . '</span> %title',
                'next_text' => '<span class="nav-label">' . __('Próximo', 'fydelis-pro') . '</span> %title',
            ]);

            // Seção de comentários
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;

        endwhile;
        ?>
    </main>
    <?php get_sidebar(); ?>
</div>

<?php get_footer();