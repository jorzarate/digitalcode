<?php
/**
 * Just footer.
 *
 * @package Vastart
 * @since 1.0.0
 */

?>
	</main><!-- #main -->

	<footer id="footer">
		<?php get_template_part( 'template-parts/footer/builder' ); ?>
		
		<?php get_template_part( 'template-parts/footer/widgets' ); ?>

		<?php get_template_part( 'template-parts/footer/legal' ); ?>

	</footer><!-- #footer -->

</div><!-- #page -->

<?php get_template_part( 'template-parts/footer/nav-mobile' ); ?>

<?php wp_footer(); ?>

</body> 
</html>
