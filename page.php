<?php
/**
 * The defualt tempalte for pages
 *
 * @author    Stephen Scaff
 * @package   page
 * @version   2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

get_header(); 
//vars - mast
$mast_subtitle = get_field('mast_subtitle');
$mast_title = get_field('mast_title');
$mast_text = get_field('mast_text');

?>

<!-- Main
================================================== --> 
<main role="main">

<!-- Mast
================================================== --> 
<section class="mast">
  <div class="mast__bg"></div>
  <header class="mast__header">
    <?php if ($mast_subtitle) : ?><span class="mast__subtitle"><?php echo $mast_subtitle; ?></span><?php endif; ?>
    <?php if ($mast_title) : ?><h1 class="mast__title js-letters"><?php echo $mast_title; ?></h1><?php endif; ?>
    <hr class="sep-center sep--white">
    <?php if ($mast_text) : ?><p class="mast__text"><?php echo $mast_text; ?></p><?php endif; ?>
  </header>
</section>

<!-- Section
================================================== -->
<section class="section pad">
 <div class="grid">
  <div class="grid__col g-8 centered">
  <?php 
   while (have_posts()) : the_post();
    the_content();
   endwhile; // End content loop ?>
  </div>
 </div>
</section>
</main>

<!-- Footer
================================================== --> 
<?php get_footer(); ?>