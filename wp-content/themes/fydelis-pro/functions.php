<?php
/**
 * Funções e configurações principais do tema Fydelis Pro
 * 
 * @package Fydelis_Pro
 * @since 1.0.0
 */

// Impede acesso direto
if (!defined('ABSPATH')) exit;

// Versão do tema para controle de cache
define('FYDELIS_PRO_VERSION', '1.0.0');

// Requer arquivos de suporte
require_once get_template_directory() . '/inc/setup.php';
require_once get_template_directory() . '/inc/enqueue.php';
require_once get_template_directory() . '/inc/security.php';

// Habilita suporte a recursos
add_action('after_setup_theme', 'fydelis_pro_setup');
add_action('wp_enqueue_scripts', 'fydelis_pro_enqueue_assets');