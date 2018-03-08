<?php
/**
 * Partial: partials/partial-footer
 *
 * @author    Stephen Scaff
 * @package   jumpoff/partials/partial-footer
 * @version   1.0
 */
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

?>


<footer class="site-footer">
 <div class="grid" data-scroll="stagger-up"> 

 <img class="site-footer__img" src="<?php echo jumpoff_img(); ?>/graphics/graphic-ramens.png"/>
  <a class="site-footer__logo">
    <span class="logo-type">Ligaya Scaff</span>
  </a>
    <span class="site-footer__sep"></span>
    <nav class="site-footer__nav">
    <ul data-scroll="stagger-up">  
      <li><a class="" href="https://www.linkedin.com/in/ligaya81" target="_blank" rel="external">Linkedin</a></li>
      <li><a class="" href="https://www.instagram.com/ligaya.aline/" target="_blank" rel="external">Instagram</a></li>
      <li><a class="" href="" target="_blank" rel="external">Facebook</a></li>
      <li><a class="" href="mailto:ligaya.scaff@gmail.com" target="_blank" rel="external">Email</a></li>
    </ul>
    </nav>
    <span class="site-footer__credz">Thanks for stopping by!</span>
    <span class="site-footer__cite">&copy; <?php echo date('Y'); ?> Liggie.</span>
 </div>
</footer>

<!-- Le javascript --> 
<?php wp_footer(); ?>
  <div class="page-trans"></div>
</body>
</html>