<?php
/**
 * Conteúdo "não encontrado"
 *
 * @package Fydelis_Pro
 */

if (!defined('ABSPATH')) exit;
?>

<section class="no-content">
    <h2 class="no-content-title"><?php esc_html_e('Nada encontrado', 'fydelis-pro'); ?></h2>
    <p><?php esc_html_e('Não há conteúdo correspondente. Tente uma busca ou volte à página inicial.', 'fydelis-pro'); ?></p>
    <?php get_search_form(); ?>
</section>