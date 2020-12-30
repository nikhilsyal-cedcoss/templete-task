<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nikhil
 */

?>
<?php wp_footer(); ?>

</body>
</html>
<footer>
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<ul class="social-icons">
							<?php wp_nav_menu( array( 'theme_location' => 'new-menu' ) ); ?>
						</ul>
					</div>
					<div class="col-lg-12">
						<div class="copyright-text">
							<?php echo printf( esc_html__( 'Theme: %1$s by %2$s.', 'nikhil' ), 'nikhil', '<a href="http://underscores.me/">Underscores.me</a>' ); ?> <a rel="nofollow" href="https://templatemo.com" target="_parent">TemplateMo</a>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>
