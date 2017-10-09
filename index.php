

<?php get_header(); 
    /* Template Name: Home Page*/
?>

	<div class="site-container"><?php
		$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
		?>
		<div class="row twelve columns banner-image" style="background: url(<?php echo $src[0]; ?> ); background-position:center center; height: 700px; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">  
	  	</div>

	  	<div class="twelve columns content main-content">
	    	<div class="hello-banner" style="background-image: url('<?php bloginfo('template_url') ?>/assets/img/sweets-bg.jpg')">
				<div class="offset-by-one ten columns welcome-inner">
		    		<div class="one-half column intro-blurb wow fadeInLeft "><?php 
		    			if ( have_posts() ) : 
			                while ( have_posts() ) : 
			                        the_post(); 
			                             the_content(); 
			                 endwhile; else : ?>
			                  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			            <?php endif; ?>
		    		</div>

					<div class="one-half column wow fadeInRight brands-wrapper"><?php
						$my_id = 1257;
						$post_id_1257 = get_post($my_id);
						$content = $post_id_1257->post_content;
						$content = apply_filters('the_content', $content);
						$content = str_replace(']]>', ']]>', $content); ?>
						<div class="brands"><?php
							echo $content; ?>
		    			</div>
		    		</div>

	    		</div>
	    	</div>
		</div>

		<div class="twelve columns kids-teens">
			<div class="one-half column left"><?php
				$my_id = 1322;
				$post_id_1322 = get_post($my_id);
				$content = $post_id_1322->post_content;
				$content = apply_filters('the_content', $content);
				$content = str_replace(']]>', ']]>', $content);
				echo $content; ?>
			</div>
				

			<div class="one-half column right"><?php
				$my_id = 1324;
				$post_id_1324 = get_post($my_id);
				$content = $post_id_1324->post_content;
				$content = apply_filters('the_content', $content);
				$content = str_replace(']]>', ']]>', $content);
				echo $content; ?>
			</div>

			<div class="go-tos">
				<button class="kidsbtn"><a href="/">Kids</a></button>
				<button class="teenbtn"><a href="/">Teens</a></button>
			</div> 
			
		</div>
		
	</div>

<?php get_footer(); ?>