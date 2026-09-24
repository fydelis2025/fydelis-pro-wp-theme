<?php if (!defined('ABSPATH')) exit; ?>
</main>

<footer class="site-footer" role="contentinfo">
    <div class="container">
        <div class="footer-widgets-grid">
            <?php if (is_active_sidebar('footer-1')) : ?>
                <div class="footer-column">
                    <?php dynamic_sidebar('footer-1'); ?>
                </div>
            <?php endif; ?>
            
            <?php if (is_active_sidebar('footer-2')) : ?>
                <div class="footer-column">
                    <?php dynamic_sidebar('footer-2'); ?>
                </div>
            <?php endif; ?>
        </div>
        
        <nav class="footer-nav">
            <?php wp_nav_menu([
                'theme_location' => 'footer',
                'container'      => false,
                'menu_class'     => 'footer-menu',
            ]); ?>
        </nav>
        
        <p class="copyright">
            <?php echo esc_html(date('Y')); ?> — <?php bloginfo('name'); ?>
            <?php esc_html_e('Todos os direitos reservados.', 'fydelis-pro'); ?>
        </p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>