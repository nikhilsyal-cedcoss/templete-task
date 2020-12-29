<?php
/**
 * The template for displaying single post pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nikhil
 */

get_header();

?>
	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main>
	
  <div class="container">
       <div class="row">
	        <div class="col-lg-8">
            <div class="sidebar-item comments">
                  <?php  
                   if ( comments_open() || get_comments_number() ) :
                      comments_template();
                  endif;
                  ?>
             </div>
          </div>
          <div class="col-lg-4">
                
          </div>
       </div>
   </div>
</section>
  
                
<?php

get_footer();
