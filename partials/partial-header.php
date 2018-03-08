<?php
/**
 * Partial: partials/partial-header
 *
 * @author    Stephen Scaff
 * @package   jumpoff/partials/partial-header
 * @version    1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly
}
?>
<body <?php body_class(); ?>>

<!-- Header -->
<header class="site-header">
   <div class="site-header__grid">
    <a class="site-header__logo" href="<?php jumpoff_page_url('home') ?>">
      <span class="logo-type js-letters">Ligaya Scaff</span>
    </a>
    <!-- Nav Toggle -->
    <a class='site-header__menu-link js-menu-toggle'>
      <div class='menu-link__bars'></div>
    </a> 
  </div>
</header>
<!-- Site Menu -->
<section class="site-menu">
  <nav class="site-menu__nav">
    <ul>
      <li><a class="site-menu__link"  href="<?php echo jumpoff_page_url('home') ?>">Home</a></li>
      <li><a class="site-menu__link" href="<?php echo jumpoff_page_url('about') ?>">About</a></li>
      <li><a class="site-menu__link" href="<?php echo jumpoff_page_url('cv') ?>">Curriculum Vitae</a></li>
      <li><span class="site-menu__sep"></span></li>
      <li><a class="site-menu__social" href="https://www.linkedin.com/in/ligaya81" target="_blank" rel="external">Linkedin</a></li>
      <li><a class="site-menu__social" href="https://www.instagram.com/ligaya.aline/" target="_blank" rel="external">Instagram</a></li>
      <li><a class="site-menu__social" href="" target="_blank" rel="external">Facebook</a></li>
      <li><a class="site-menu__social" href="mailto:ligaya.scaff@gmail.com" target="_blank" rel="external">Email</a></li>
    </ul>
  </nav>
</section> 
