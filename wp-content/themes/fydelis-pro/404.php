<?php
/**
 * Página 404 — Não Encontrada
 *
 * @package Fydelis_Pro
 * @since 1.0.0
 */

if (!defined('ABSPATH')) exit;

get_header(); ?>

<main id="primary" class="content-area">
    <div class="error-404 not-found">
        <div class="container">
            <h1 class="error-title"><?php esc_html_e('404 — Página não encontrada', 'fydelis-pro'); ?></h1>
            <p class="error-message">
                <?php esc_html_e('Desculpe! O conteúdo que você procura não existe ou foi movido.', 'fydelis-pro'); ?>
            </p>
            
            <div class="error-actions">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary">
                    <?php esc_html_e('Voltar à página inicial', 'fydelis-pro'); ?>
                </a>
                
                <div class="search-box">
                    <p><?php esc_html_e('Ou busque abaixo:', 'fydelis-pro'); ?></p>
                    <?php get_search_form(); ?>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer();