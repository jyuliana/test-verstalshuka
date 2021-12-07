<?php
/**
 * Template used to display post content.
 *
 * @package test-verstalshuka
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<?php
	/**
	 * Functions hooked in to test-verstalshuka_loop_post action.
	 *
	 * @hooked test-verstalshuka_post_header          - 10
	 * @hooked test-verstalshuka_post_content         - 30
	 */
	do_action( 'test-verstalshuka_loop_post' );
	?>

</article><!-- #post-## -->
