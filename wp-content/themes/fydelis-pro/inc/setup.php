<?php
/**
 * Configuração e recursos do tema
 *
 * @package Fydelis_Pro
 * @since 1.0.0
 */

// Impede acesso direto
if (!defined('ABSPATH')) exit;

/**
 * Configuração de recursos do tema
 */
function fydelis_pro_setup() {
    // Suporte a título dinâmico
    add_theme_support('title-tag');
    
    // Imagens destacadas
    add_theme_support('post-thumbnails');

    // Tamanhos de imagem personalizados
    add_image_size('fydelis-card', 400, 250, true);
    add_image_size('fydelis-hero', 1200, 400, true);
    
    // Formatos de post
    add_theme_support('post-formats', ['aside', 'gallery', 'quote', 'video']);
    
    // HTML5 semântico
    add_theme_support('html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'script',
        'style'
    ]);

    // Suporte a logotipo personalizado
    add_theme_support('custom-logo', [
        'height'      => 60,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ]);

    // Suporte a edição de estilos no bloco
    add_theme_support('wp-block-styles');
    add_theme_support('align-wide');
    
    // Menus
    register_nav_menus([
        'primary' => __('Menu Principal', 'fydelis-pro'),
        'footer'  => __('Menu Rodapé', 'fydelis-pro'),
    ]);
    
    // Largura máxima do conteúdo
    if (!isset($content_width)) {
        $content_width = 1200;
    }
}
add_action('after_setup_theme', 'fydelis_pro_setup');

/**
 * Registro de áreas de widgets
 */
function fydelis_pro_widgets_init() {
    // Barra Lateral
    register_sidebar([
        'name'          => __('Barra Lateral', 'fydelis-pro'),
        'id'            => 'sidebar-1',
        'description'   => __('Widgets exibidos na barra lateral', 'fydelis-pro'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ]);

    // Rodapé — Coluna 1
    register_sidebar([
        'name'          => __('Rodapé — Coluna 1', 'fydelis-pro'),
        'id'            => 'footer-1',
        'description'   => __('Primeira coluna do rodapé', 'fydelis-pro'),
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="footer-widget-title">',
        'after_title'   => '</h4>',
    ]);

    // Rodapé — Coluna 2
    register_sidebar([
        'name'          => __('Rodapé — Coluna 2', 'fydelis-pro'),
        'id'            => 'footer-2',
        'description'   => __('Segunda coluna do rodapé', 'fydelis-pro'),
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="footer-widget-title">',
        'after_title'   => '</h4>',
    ]);
}
add_action('widgets_init', 'fydelis_pro_widgets_init');