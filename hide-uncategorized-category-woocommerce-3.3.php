<?php // Do not include this if already open!

/* Code goes in active theme functions.php.	*/

add_filter( 'woocommerce_product_subcategories_args', 'remove_uncategorized_category' );
/**
 * Remove uncategorized category from shop page.
 *
 * @param array $args Current arguments.
 * @return array
 **/
function remove_uncategorized_category( $args ) {
  $uncategorized = get_option( 'default_product_cat' );
  $args['exclude'] = $uncategorized;
  return $args;
}

?>