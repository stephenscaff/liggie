<?php
/**
 * Template Name: CV
 *
 * @author    Stephen Scaff
 * @package   page
 * @version   1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

get_header(); 

?>

<!-- MAIN -->
<main role="main" class="grid-lg">

<!-- MAST -->  
<section class="cv-mast">
  <h4 class="cv-mast__pretitle">Curriculum Vitae</h4>
  <h1 class="cv-mast__title">Ligaya Scaff</h1>
</section>

<!-- CV MODULES -->  
<?php while (has_sub_field('modules')) : ?>
  <?php ACF_Modules::render(get_row_layout()); ?>
<?php endwhile; ?>

</main>

<!-- FOOTER-->	
<?php get_footer(); ?>