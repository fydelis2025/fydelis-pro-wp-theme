<?php if (!defined('ABSPATH')) exit; ?>
<?php get_header(); ?>

<div class="container">
    <main id="primary" class="content-area">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
                get_template_part('template-parts/content', get_post_format());
            endwhile;
            
            the_posts_pagination([
                'prev_text' => '← Anterior',
                'next_text' => 'Próximo →'
            ]);
        else :
            get_template_part('template-parts/content', 'none');
        endif;
        ?>
    </main>
    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>