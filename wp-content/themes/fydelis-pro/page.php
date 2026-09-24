<?php
/**
 * Template de Página
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
        ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="page-header">
                    <?php if (!is_front_page()) : ?>
                        <h1 class="page-title"><?php the_title(); ?></h1>
                    <?php endif; ?>
                </header>

                <div class="page-content">
                    <?php
                    the_content();
                    
                    wp_link_pages([
                        'before' => '<div class="page-links">' . __('Páginas:', 'fydelis-pro') . ' ',
                        'after'  => '</div>',
                    ]);

                    if (get_edit_post_link()) :
                        edit_post_link(
                            __('Editar', 'fydelis-pro'),
                            '<p class="edit-link">',
                            '</p>'
                        );
                    endif;
                    ?>
                </div>
            </article>
        <?php endwhile; ?>
    </main>
    <?php get_sidebar(); ?>
</div>

<?php get_footer();