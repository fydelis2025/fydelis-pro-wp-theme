<?php
/**
 * Arquivo de Listagens
 *
 * @package Fydelis_Pro
 * @since 1.0.0
 */

if (!defined('ABSPATH')) exit;

get_header(); ?>

<div class="container">
    <main id="primary" class="content-area">
        <header class="archive-header">
            <?php
            the_archive_title('<h1 class="archive-title">', '</h1>');
            the_archive_description('<div class="archive-description">', '</div>');
            ?>
        </header>

        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
                get_template_part('template-parts/content', 'excerpt');
            endwhile;

            the_posts_pagination([
                'mid_size'  => 2,
                'prev_text' => '← ' . __('Anterior', 'fydelis-pro'),
                'next_text' => __('Próximo', 'fydelis-pro') . ' →',
            ]);
        else :
            get_template_part('template-parts/content', 'none');
        endif;
        ?>
    </main>
    <?php get_sidebar(); ?>
</div>

<?php get_footer();