        <footer class="row twelve columns footer" role="contentinfo">
        	<div class="six columns nav-list"><?php 
        	  wp_nav_menu(['theme_location' => 'footer-menu' ]); ?>
        	</div>
        	<div class="six columns social-list"><?php 
        	  wp_nav_menu(['theme_location' => 'social-menu' ]); ?>
        	</div>
    

            <div class="twelve columns copyright">
                <p class="copyright">
                    &copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?>
                </p>
         
            
            </div>

        </footer>

        <?php wp_footer(); ?>

    </body>
</html>