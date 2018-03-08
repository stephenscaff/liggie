<?php
/**
 *  Partial: partials/partial-mast
 *
 *  Template for displaying a mast sections with ACFs
 *
 *  @author    Stephen Scaff
 *  @package   jumpoff/partials/partial-products
 *  @version    1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
//vars

$mast_title = get_field('mast_title');
$mast_text = get_field('mast_text');
$mast_bg = get_field('mast_bg');
$mast_btn_text = get_field('mast_btn_text');
$mast_btn = get_field('mast_btn');

// Get the queried object and sanitize it
$current_page = sanitize_post( $GLOBALS['wp_the_query']->get_queried_object() );
// Get the page slug
$slug = $current_page->post_name;
?>

<!-- Mast --> 
<section class="mast mast--<?php echo $slug; ?>">
  <?php if ($mast_bg) : ?>
    <figure class="mast__bg" style="background-image:url(<?php echo $mast_bg['url'] ?>)"></figure>
  <?php else : ?>
    <figure class="mast__bg js-parallax" style="background-image:url(<?php echo jumpoff_ft_img('full'); ?>)"></figure>
  <?php endif; ?>
  <div class="grid">
    <div class="mast__content">
    <?php if ($mast_title) : ?>
      <h1 class="mast__title"><?php echo $mast_title; ?></h1>
    <?php else : ?>
      <h1 class="mast__title"><?php the_title(); ?></h1>
    <?php endif; if ($mast_text) : ?>
      <p class="mast__text"><?php echo $mast_text; ?></p>
    <?php endif; ?>
    </div>
  </div>
</section>

