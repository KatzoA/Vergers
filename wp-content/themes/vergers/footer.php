<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package i-craft
 * @since i-craft 1.0
 */
?>

		</div><!-- #main -->
		<footer id="colophon" class="site-footer" role="contentinfo">
        	<div class="footer-bg clearfix">
                <div class="widget-wrap">
                    <?php get_sidebar( 'main' ); ?>
                </div>
			</div>
			<div class="site-info">
                <div class="copyright">
                	<?php esc_attr_e( 'Copyright &copy;', 'i-craft' ); ?>  <?php bloginfo( 'name' ); ?>
                    <p>L'abus d'Alcool est dangeureux pour la santé.</p>
                </div>            
            	<div class="credit-info">
					<a href="<?php echo esc_url( __( 'http://wildcodeschool.fr', 'i-craft' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'i-craft' ); ?>">
						<?php printf( __( 'Propulsé par WildCodeSchool', 'i-craft' ), 'WildCodeSchool' ); ?>
                    </a>
                    <p>Les vergers du Theuil</p>
                    <p>10 le Theuil</p>
                    <p>28240 - Les Corvées-Les-Yys</p>
                    <?php printf( __( '', 'i-craft' )); ?> 
                    <a href="<?php echo esc_url( __( 'http://wildcodeschool.fr', 'i-craft' ) ); ?>">
                   		<?php printf( __( '', 'i-craft' ) ); ?>
                    </a>
                </div>

			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>