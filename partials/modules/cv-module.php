<?php
/**
 *  Module: CV
 *
 *  Module 
 *
 *  @author    Stephen Scaff
 *  @version   1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

get_header(); 

$title = get_sub_field('title');
$items = 'items';
?>

<!-- CV Block --> 
<section class="cv-block">
  <!-- CV Block: Header --> 
  <header class="cv-block__header">
    <h2 class="cv-block__title"><?php echo $title; ?></h2>
  </header>
  <!-- CV Block: Content --> 
  <div class="cv-block__content"> 
    <div class="cv-block__cols">
    <?php 
    while( have_rows($items) ): the_row(); 
      $item_title = get_sub_field('item_title'); 
    $item_subtitle = get_sub_field('item_subtitle'); 
      $item_content = get_sub_field('item_content'); 
      $has_list = get_sub_field('has_list');
      $item_list_title = get_sub_field('item_list_title');
      $item_list = get_sub_field('item_list'); 
    ?>
    <?php if ($has_list) : ?>
      <div class="cv-block__col " data-scroll="stagger-up">
        <h3 class="cv-block__item-title"><?php echo $item_title; ?></h3>
    <?php if ($item_subtitle) : ?>
    <h4 class="cv-block__subtitle"><?php echo $item_subtitle; ?></h4>
    <?php endif; ?>
        <?php echo jumpoff_line_wrap($item_content, 'span') ?>
      </div>
      
      <div class="cv-block__col ">
      <h4 class="cv-block__list-title"><?php echo $item_list_title; ?></h4>
        <ul class="cv-block__list"  data-scroll="stagger-up">
          <?php echo jumpoff_line_wrap($item_list, 'list'); ?>
        </ul>
      </div>
    <?php else : ?>
      <div class="cv-block__col">
        <h3 class="cv-block__item-title"><?php echo $item_title; ?></h3>
    <?php if ($item_subtitle) : ?>
    <h4 class="cv-block__subtitle"><?php echo $item_subtitle; ?></h4>
    <?php endif; ?>
        <?php echo jumpoff_line_wrap($item_content, 'span'); ?>
      </div>
    <?php endif;
    endwhile; ?>
    </div>
  </div>
</section> 