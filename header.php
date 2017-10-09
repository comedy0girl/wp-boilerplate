<?php include (TEMPLATEPATH . '/template-parts/_wrapper.php'); ?>

<header class="header" role="banner">
	<!-- <div class="cloud">
		<img src="<?php bloginfo('template_url') ?>/assets/img/cloud.png">
	</div>  -->
     <div class="row top-banner">
        <div class="navigation"> <?php 
            wp_nav_menu(['theme_location' => 'header-menu' ]); ?>
        </div>

        <div class="wow bounceInDown animated">
            <div class="logo-wrapper"><?php
                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $image = wp_get_attachment_image_src( $custom_logo_id , 'full' ); ?>
                <img src="<?php echo $image[0]; ?>" >
           
            </div>
        </div>  
    </div>
</header>


