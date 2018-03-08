<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Bail if accessed directly

/** 
 *  jumpoff_line_wrap ()
 *  Gets line breaks from a field and wraps
 *  them in span or list.
 *
 *  @param   string $type Markup wrapping lines
 *  @return  $output
 *  @example 
 *           jumpoff_line_wrap($fieldname, 'span')
 */
function jumpoff_line_wrap ( $textarea, $type="list" ){
  // Get each line break from our field/input
  $lines = explode("\n", $textarea);

  // If we have something
  if ( !empty($lines) ) {
    
    // Loop through all our lines
    // Would never exceed 5
    foreach ( $lines as $line ) {

      // If is $type = list
      if ($type == 'list'){
        $output .= '<li>'. trim( $line ) .'</li>';
      } 
      // If $type = span
      elseif ($type == 'span'){
        $output .= '<span>'. trim( $line ) .'</span>';
      }
      
    }
  }
  return $output;
}

/** 
 *  jumpoff_breaks_list ()
 *  Wraps line breaks from as custom fieldin list items
 *  @param: 
 *  @example: jumpoff_breaks_list($fieldname)
 */
function jumpoff_auto_list ( $textarea ){
  $lines = explode("\n", $textarea);
  if ( !empty($lines) ) {
    foreach ( $lines as $line ) {
      echo '<li>'. trim( $line ) .'</li>';
    }
  }
}
/** 
 *  jumpoff_auto_span()
 *  Wraps line breaks from a field in a span
 *  @param: 
 *  @example: jumpoff_breaks_list($fieldname)
 */
function jumpoff_auto_span ( $textarea ){
  $lines = explode("\n", $textarea);
  if ( !empty($lines) ) {
    foreach ( $lines as $line ) {
      echo '<span>'. trim( $line ) .'</span>';
    }
  }
}
