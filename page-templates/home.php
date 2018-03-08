<?php
/**
 * Template Name: Home
 *
 * @author    Stephen Scaff
 * @package   page
 * @version   2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

get_header(); 

//vars
$mast_title = get_field('mast_title');
$mast_subtitle = get_field('mast_subtitle');
$mast_text = get_field('mast_text');
$mast_img = get_field('mast_img');
$mast_link = get_field('mast_link');
$mast_link_text = get_field('mast_link_text');

?>

<!-- Main -->
<main role="main">

<!-- Halfs -->
 <section class="halfs">
  <!-- Halfs: Col --> 
  <div class="halfs__col has-bg-img">
    <figure class="halfs__bg" style="background-image:url(<?php echo $mast_img['url']; ?>)"></figure>
  </div>
  <!-- Halfs: Col --> 
  <div class="halfs__col has-content">
    <div class="halfs__content">
      <header class="halfs__header" data-scroll="stagger-up">
        <h1 class="halfs__title"><?php echo $mast_title; ?></h1>
        <?php if ($mast_subtitle) : ?><h5 class="halfs__subtitle"><?php echo $mast_subtitle; ?></h5><?php endif; ?>
      </header>
      
      <div class="halfs__text" data-scroll="stagger-up">
        <?php echo $mast_text; ?>
        <a class="btn js-letters" href="<?php echo $mast_link; ?>"><?php echo $mast_link_text; ?></a>
      </div>
    </div>
  </div>
</section>

</main>

<!-- Footer -->	
<?php get_footer(); ?> 