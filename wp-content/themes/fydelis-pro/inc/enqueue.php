<?php
/**
 * Carregamento de estilos e scripts
 * 
 * @package Fydelis_Pro
 * @since 1.0.0
 */

if (!defined('ABSPATH')) exit;

function fydelis_pro_enqueue_assets() {
    // Estilo principal
    wp_enqueue_style(
        'fydelis-pro-main',
        get_template_directory_uri() . '/assets/css/main.css',
        [],
        FYDELIS_PRO_VERSION
    );

    // Estilo responsivo (carrega após o principal)
    wp_enqueue_style(
        'fydelis-pro-responsive',
        get_template_directory_uri() . '/assets/css/responsive.css',
        ['fydelis-pro-main'],
        FYDELIS_PRO_VERSION,
        'screen and (max-width: 768px)'
    );

    // Script de navegação
    wp_enqueue_script(
        'fydelis-pro-navigation',
        get_template_directory_uri() . '/assets/js/navigation.js',
        [],
        FYDELIS_PRO_VERSION,
        true // Carrega no final do body
    );

    // Script principal
    wp_enqueue_script(
        'fydelis-pro-main',
        get_template_directory_uri() . '/assets/js/main.js',
        ['jquery'],
        FYDELIS_PRO_VERSION,
        true
    );

    // Passa variáveis JS (ex: URL raiz)
    wp_localize_script('fydelis-pro-main', 'fydelisData', [
        'siteUrl' => esc_url(home_url('/')),
        'themeUrl' => esc_url(get_template_directory_uri())
    ]);

    // Comentários — carrega apenas quando necessário
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'fydelis_pro_enqueue_assets');

// Remove versões de consulta para cache
add_filter('style_loader_src', function ($src) {
    if (strpos($src, 'ver=')) $src = remove_query_arg('ver', $src);
    return $src;
}, 999);

add_filter('script_loader_src', function ($src) {
    if (strpos($src, 'ver=')) $src = remove_query_arg('ver', $src);
    return $src;
}, 999);