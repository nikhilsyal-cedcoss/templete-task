<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nikhil
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				nikhil_posted_on();
				nikhil_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->
	<section class="blog-posts">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="all-blog-posts">
              <div class="row">
			    
			  <div class="col-lg-12">
                <div class="blog-post">
                    <div class="blog-thumb">
					<?php nikhil_post_thumbnail(); ?>
                    </div>
                    <div class="down-content">
                      <span><?php the_title(); ?></span>
                      <a href="post-details.php"><h4><?php the_category(', '); ?></h4></a>
                      <ul class="post-info">
                      <li><a href="#"><?php the_author();?></a></li>
                  <li><a href="#"><?php the_date();?></a></li>
                  <li><a href="#"><?php comments_number(); ?></a></li>
                      </ul>
                      	<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'nikhil' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'nikhil' ),
				'after'  => '</div>',
			)
		);
		?>
                      <div class="post-options">
                        <div class="row">
                          <div class="col-6">
                            <ul class="post-tags">
                              <li><i class="fa fa-tags"></i></li>
                              <?php
                                                $posttags = get_the_tags();
                                                if ($posttags) {
                                                foreach($posttags as $tag) {
                                                    echo '<li><a>'.$tag->name .'</a>,</li>'; 
                                                }
                                                }
                                                ?>
                              
                            </ul>
                          </div>
                          <div class="col-6">
                            <ul class="post-share">
                              <li><i class="fa fa-share-alt"></i></li>
                              <li><a href="#">Facebook</a>,</li>
                              <li><a href="#"> Twitter</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
  
            
              </div>
            </div>
          </div>

		  <div class="col-lg-4">
            <div class="sidebar">
              <div class="row">
              <ul id="slider-id" class="slider-class ">
              <div class="col-lg-12">
                  <div class="sidebar-item search recent-posts">
                  <?php get_sidebar();?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

	<div class="entry-content">

	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php nikhil_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
