<?php
/**
* content-module
*
* The module for creating content (headers, paragraphs, blockquotes, etc) regions.
*
* @author       Stephen Scaff
* @package      SandP
* @see          kit/scss/components/_content.scss
* @version      1.0
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
$content = get_sub_field('content'); 
$opt_id = get_sub_field('option_id');
$opt_class = get_sub_field('option_class');
?>

<!-- CONTENT -->
<section <?php if ($opt_id) : echo "id=$opt_id"; endif; ?> class="content pad <?php if ($opt_class) : echo $opt_class; endif; ?>">
  <div class="grid-sm">
    <?php echo $content; ?>
  </div>
</section>

<?php endif; ?>