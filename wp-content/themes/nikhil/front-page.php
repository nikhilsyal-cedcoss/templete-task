<?php
/**
* Template Name: home Page
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/
get_header();
?>
 <div class="main-banner header-text">
      <div class="container-fluid">
        <div class="owl-banner owl-carousel">
            <?php $blog_posts = new WP_Query( array( 'post_type' => 'post', 'post_status’' => 'publish', 'posts_per_page' => 4 ) );?>
            <?php if ( $blog_posts->have_posts() ) : ?>
                <?php while ( $blog_posts->have_posts() ) : $blog_posts->the_post(); ?>
            <div class="item">
            <?php if ( has_post_thumbnail() ) { 
            the_post_thumbnail( get_the_ID(), 'full' );
            } ?>
            <div class="item-content">
              <div class="main-content">
                <div class="meta-category">
                  <span><?php the_category(', '); ?></span>
                </div>
                <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
                <ul class="post-info">
                  <li><a href="#"><?php the_author();?></a></li>
                  <li><a href="#"><?php the_date();?></a></li>
                  <li><a href="#"><?php comments_number(); ?></a></li>
                </ul>
              </div>
            </div>
          </div>
          <?php endwhile; ?>
          <?php else: ?>
            <p class = "no-blog-posts">
            <?php esc_html_e('Sorry, no posts matched your criteria.', 'theme-domain'); ?> 
            </p>
            <?php endif; 
            wp_reset_postdata(); ?>



         
          
         
        </div>
      </div>
    </div>


    <section class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="main-content">
              <div class="row">
                <div class="col-lg-8">
                  <span>Stand Blog HTML5 Template</span>
                  <h4>Creative HTML Template For Bloggers!</h4>
                </div>
                <div class="col-lg-4">
                  <div class="main-button">
                    <a rel="nofollow" href="https://templatemo.com/tm-551-stand-blog" target="_parent">Download Now!</a>
                  </div>
           
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="blog-posts">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="all-blog-posts">
              <div class="row">
                
                <?php $blog_posts = new WP_Query( array( 'post_type' => 'post', 'post_status’' => 'publish', 'posts_per_page' => 3 ) );?>
                <?php if ( $blog_posts->have_posts() ) : ?>
                <?php while ( $blog_posts->have_posts() ) : $blog_posts->the_post(); ?>
                <div class="col-lg-12">
                <div class="blog-post">
                    <div class="blog-thumb">
                      <?php if ( has_post_thumbnail() ) { 
                                 the_post_thumbnail( get_the_ID(), 'full' );
                                   } ?> 
                    </div>
                    <div class="down-content">
                      <span><?php the_title(); ?></span>
                      <a href="post-details.php"><h4><?php the_category(', '); ?></h4></a>
                      <ul class="post-info">
                      <li><a href="#"><?php the_author();?></a></li>
                  <li><a href="#"><?php the_date();?></a></li>
                  <li><a href="#"><?php comments_number(); ?></a></li>
                      </ul>
                      <p>Stand Blog is a free HTML CSS template for your CMS theme. You can easily adapt or customize it for any kind of CMS or website builder. You are allowed to use it for your business. You are NOT allowed to re-distribute the template ZIP file on any template collection site for the download purpose. <a rel="nofollow" href="https://templatemo.com/contact" target="_parent">Contact TemplateMo</a> for more info. Thank you.</p>
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
                <?php endwhile; ?>
                      <?php endif; ?>
                <div class="col-lg-12">
                  <div class="main-button">
                    <a href="blog.html">View All Posts</a>
                  </div>
                </div>
              </div>
            </div>
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
    </section>
    <?php
   
get_footer();
