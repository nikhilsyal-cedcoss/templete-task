<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package nikhil
 */

get_header();
?>
<div class="container">
<div class="row">
<div class="col-lg-8">

	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'nikhil' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->
</div>
<div class="col-lg-4">
<div class="sidebar">
              <div class="row">
              <ul id="slider-id" class="slider-class">
              <div class="col-lg-12">
              <div class="sidebar-item search recent-posts">
        <?php get_sidebar();?>
                </div>
               
              </div>
            </div>
          </div>
</div>
</div>
</div>
<?php

get_footer();
