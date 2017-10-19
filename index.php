

<?php get_header(); lcoal
    /* Template Name: Home Page*/
?>

	<div class="site-container"><?php
		$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
		?>
		<div class="row twelve columns banner-image" style="background: url(<?php echo $src[0]; ?> ); background-position:center center; height: 700px; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">  
	  	</div>

	  	<div class="twelve columns content main-content">
	  		<!-- <div class="cloud">
				<img src="<?php bloginfo('template_url') ?>/assets/img/cloud.png">
			</div> -->

	    	<div class="hello-banner" style="background-image: url('<?php bloginfo('template_url') ?>/assets/img/sweets-bg.jpg')">
				<div class="offset-by-one ten columns welcome-inner">
		    		  <!-- <div class="one-half column wow fadeInRight ">
		                <div class="julius-hello">
		                    <img  src="<?php bloginfo('template_url') ?>/assets/img/lil-jules.png">
		                </div>
		            </div> -->

					<div class="twelve columns wow fadeInRight brands-wrapper"><?php 
						$images = get_field('logos');

						if( $images ): ?>
						    <ul>
						        <?php foreach( $images as $image ): ?>
						            <li class="logo-img">
						                <a href="<?php echo $image['url']; ?>">
						                     <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" />
						                </a>
						                <p><?php echo $image['caption']; ?></p>
						            </li>
						        <?php endforeach; ?>
						    </ul>
						<?php endif; ?>
		    		</div>

	    		</div>
	    	</div>
		</div>

		<div class="twelve columns kids-teens"><?php
			if(have_rows('bottom_images')) :

	        	while( have_rows('bottom_images') ): the_row();  
		            $imageL = get_sub_field('left_image');
		            $imageR = get_sub_field('right_image'); ?>


					<div class="one-half column left">
						 <img src="<?php echo $imageL; ?>" />
					</div>
						

					<div class="one-half column right">
						 <img src="<?php echo $imageR; ?>" />
					</div><?php 

	      		endwhile; 

    		endif; ?>

			<div class="go-tos">
				<li><button class="kidsbtn"><a href="/">Kids</a></button></li>
				<li><button class="teenbtn"><a href="/">Teens</a></button></li>
				<li><button class="ladiesbtn"><a href="/">Ladies</a></button></li>
				<li><button class="guysbtn"><a href="/">Mens</a></button></li>

			</div> 
			
		</div>
		
	</div>

<?php get_footer(); ?>