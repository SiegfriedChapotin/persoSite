	<?php
	/**
	 * The template for displaying the footer
	 *
	 * Contains the closing of the #content div and all content after.
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
	 *
	 * @package WP_Bootstrap_Starter
	 */

	?>
						<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>

					</div><!-- .row -->
				</div><!-- .container -->
			</div><!-- #content -->
		<?php get_template_part( 'footer-widget' ); ?>
			<footer id="colophon" class="site-footer <?php echo wp_bootstrap_starter_bg_class(); ?>" role="contentinfo">
				<div class="container-fluid p-3 p-md-5">
					<div class="site-info">
						<div>
							&copy; <?php echo date('Y'); ?> <?php echo '<a href="'.home_url().'">'.get_bloginfo('name').'</a>'; ?>
							<span class="sep"> | </span>
							<a class="credits" href="https://projet01ocr.siegfriedchapotin.com/" target="_blank" title="Direction du développement culturel" alt="Direction du développement culture">
								<?php echo esc_html__('Ville de Nantes, Direction du développement culturel'); ?>
							</a>
							<br/>
							<a href="https://projet01ocr.siegfriedchapotin.com/mentions-legales/">
								Mentions légales - CGV
							</a>
						</div>
						<div id="accesadmin">
							<a href="https://projet01ocr.siegfriedchapotin.com/wp-admin/" title="accès administration du site" alt="accès administration du site" class="btn" role="button" aria-disabled="true">
								<img src="https://projet01ocr.siegfriedchapotin.com/wp-content/uploads/2018/05/accesadmin.png">
							</a>
						</div>
					</div><!-- close .site-info -->
				</div>
			</footer><!-- #colophon -->
		<?php endif; ?>
		</div><!-- #page -->

	<?php wp_footer(); ?>
	</body>
</html>