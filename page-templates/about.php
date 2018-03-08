<?php
/**
 * Template Name: About
 *
 * @author    Stephen Scaff
 * @package   page
 * @version   2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

get_header(); 

$mast_title = get_field('mast_title');
$mast_subtitle = get_field('mast_subtitle');
$mast_bg_color = get_field('mast_bg_color');

$bio = get_field('bio');
$insta_title = get_field('insta_title');
?>

<!-- Main --> 
<main role="main">

<!-- Mast --> 
<section class="mast" <?php if ($mast_bg_color) : ?>style="background-color: <?php echo $mast_bg_color; endif; ?>">
  <div class="grid" data-scroll="stagger-up">
    <header class="mast__header ">
    <h1 class="mast__title"><span><?php echo $mast_title; ?></span></h1>
      <?php if ($mast_subtitle) : ?>
      <p class="mast__subtitle"><?php echo $mast_subtitle; ?></p>
      <?php endif; ?>
    </header>
  </div>
  <div class="mast__imgs">
  <?php 
  while( have_rows('mast_images') ): the_row(); 
  $img = get_sub_field('image'); ?>
    <img class="mast__img" src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>"/>
  <?php endwhile; ?>
  </div>
</section>

<!-- Bio --> 
<section class="bio">
  <div class="grid-sm">
    <div class="bio__content" data-scroll="stagger-up">
    <?php echo $bio; ?>
    </div>
  </div>
</section>

<!-- Heading --> 
<section class="heading">
  <div class="grid" data-scroll="stagger-up">
    <h3><?php echo $insta_title; ?></h3>
  </div>
</section>

<!-- instagram --> 
<section class="instas">
  <div class="grid-lg">
    <ul class="insta" data-scroll="stagger-up"></ul>
  </div>
</section>

</main>

<!-- Footer --> 
<?php get_footer(); ?>
