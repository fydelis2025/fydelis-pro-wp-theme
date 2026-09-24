<?php
/**
 * Página Inicial
 *
 * @package Fydelis_Pro
 * @since 1.0.0
 */

if (!defined('ABSPATH')) exit;

get_header(); ?>

<section class="hero-section">
    <div class="container">
        <h1 class="hero-title"><?php bloginfo('name'); ?></h1>
        <p class="hero-subtitle"><?php bloginfo('description'); ?></p>
        <a href="<?php echo esc_url(home_url('/sobre')); ?>" class="btn btn-primary">
            <?php esc_html_e('Conheça-nos', 'fydelis-pro'); ?>
        </a>
    </div>
</section>

<section class="latest-posts">
    <div class="container">
        <h2 class="section-title"><?php esc_html_e('Últimas Publicações', 'fydelis-pro'); ?></h2>
        
        <div class="posts-grid">
            <?php
            $args = [
                'post_type'      => 'post',
                'posts_per_page' => 6,
                'post_status'    => 'publish'
            ];
            
            $query = new WP_Query($args);
            
            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
            ?>
                <article class="post-card">
                    <?php if (has_post_thumbnail()) : ?>
                        <a href="<?php the_permalink(); ?>" class="card-image">
                            <?php the_post_thumbnail('medium', ['alt' => esc_attr(get_the_title())]); ?>
                        </a>
                    <?php endif; ?>
                    
                    <div class="card-body">
                        <h3 class="card-title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h3>
                        <time class="card-date" datetime="<?php echo esc_attr(get_the_date('c')); ?>">
                            <?php echo esc_html(get_the_date()); ?>
                        </time>
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>" class="card-link">
                            <?php esc_html_e('Ler mais', 'fydelis-pro'); ?> →
                        </a>
                    </div>
                </article>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
            ?>
                <p class="no-posts"><?php esc_html_e('Ainda não há publicações.', 'fydelis-pro'); ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php get_footer();