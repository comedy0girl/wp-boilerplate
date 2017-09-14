        <footer class="twelve columns footer" role="contentinfo"><?php 
        	wp_nav_menu(['theme_location' => 'footer', 'menu_class' => 'nav nav--footer']); ?>
        	<p class="copyright">
                &copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?>
             </p>
        </footer>

        <?php wp_footer(); ?>

    </body>
</html>