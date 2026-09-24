<?php
if (!defined('ABSPATH')) exit;

// Escapa saídas — use SEMPRE nas impressões
function fydelis_pro_escape($valor, $tipo = 'html') {
    switch ($tipo) {
        case 'attr': return esc_attr($valor);
        case 'url': return esc_url($valor);
        case 'html':
        default: return esc_html($valor);
    }
}

// Remove versões do WordPress de scripts
add_filter('script_loader_src', function ($src) {
    return remove_query_arg('ver', $src);
});
add_filter('style_loader_src', function ($src) {
    return remove_query_arg('ver', $src);
});

// Protege contra XSS em formulários — use nonce
// Exemplo: wp_verify_nonce('acao', 'nome_nonce')

// Desabilita edição de arquivos pelo painel
define('DISALLOW_FILE_EDIT', true);