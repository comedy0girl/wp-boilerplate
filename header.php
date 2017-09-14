<?php 

    include (TEMPLATEPATH . '/template-parts/_wrapper.php'); ?>

    <header class="header" role="banner">
    <div class="row top-banner">
        <div class="row navigation"> <?php 
            wp_nav_menu(['theme_location' => 'header-menu' ]); ?>
        </div>
    </div>
</header>


