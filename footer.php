<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package test-verstalshuka
 */

?>
 <?php do_action( 'test-verstalshuka_before_footer' ); ?>
 <footer class="footer">
    <div class="footer-text">
      <h2><div class="fixed_text_3"><span>Наши партнеры<br>по бизнесу</span></div></h2>
      <p>
        <br>хотим рассказать вам
        <br> с кем мы сотрудничаем,
        <br>и кто нам <span class="colortext">доверяет.</span></p>
    </div>
    <div class="footer-logo">
      <img src="<?php echo get_template_directory_uri(); ?>/images/1_2.png" alt="">
      <img src="<?php echo get_template_directory_uri(); ?>/images/3.png" alt="">
      <img src="<?php echo get_template_directory_uri(); ?>/images/4.png" alt="">
    </div>
    <div class="footer-logo">
      <img src="<?php echo get_template_directory_uri(); ?>/images/2_2.png" alt="">
      <img src="<?php echo get_template_directory_uri(); ?>/images/6.png" alt="">
      <img src="<?php echo get_template_directory_uri(); ?>/images/5.png" alt="">
    </div>
  </footer>

  <?php wp_footer(); ?>