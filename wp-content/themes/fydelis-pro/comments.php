<?php
/**
 * Template de Comentários
 *
 * @package Fydelis_Pro
 * @since 1.0.0
 */

if (!defined('ABSPATH')) exit;

if (post_password_required()) return;
?>

<div id="comments" class="comments-area">
    <?php if (have_comments()) : ?>
        <h2 class="comments-title">
            <?php
            $count = get_comments_number();
            if ($count === 1) {
                esc_html_e('1 comentário', 'fydelis-pro');
            } else {
                printf(
                    esc_html(_n('%s comentário', '%s comentários', $count, 'fydelis-pro')),
                    number_format_i18n($count)
                );
            }
            ?>
        </h2>

        <ol class="comment-list">
            <?php
            wp_list_comments([
                'style'       => 'ol',
                'short_ping'  => true,
                'avatar_size' => 48,
            ]);
            ?>
        </ol>

        <?php the_comments_navigation(); ?>

    <?php endif; ?>

    <?php if (comments_open()) : ?>
        <div class="comment-form-wrap">
            <?php
            $args = [
                'title_reply_before' => '<h3 id="reply-title" class="comment-reply-title">',
                'title_reply_after'  => '</h3>',
                'label_submit'       => __('Enviar comentário', 'fydelis-pro'),
                'comment_notes_before' => '<p class="comment-notes">' . 
                    __('Seu endereço de e-mail não será publicado.', 'fydelis-pro') . '</p>',
            ];
            comment_form($args);
            ?>
        </div>
    <?php endif; ?>
</div>