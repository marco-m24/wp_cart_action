function mrc_woocommerce_cart_coupon(  ) { 
    echo 'sezione coupon';
}; 
         
// add the action 
add_action( 'woocommerce_cart_coupon', 'mrc_woocommerce_cart_coupon', 10, 0 );





function mrc_woocommerce_before_cart_totals( ) { 
    echo 'prima del totale'; 
}; 
         
// add the action 
add_action( 'woocommerce_before_cart_totals', 'mrc_woocommerce_before_cart_totals', 10, 2 ); 



function mrc_woocommerce_after_cart_totals(  ) { 
    echo 'dopo il totale';
}; 
         
// add the action 
add_action( 'woocommerce_after_cart_totals', 'mrc_woocommerce_after_cart_totals', 10, 0 ); 





function mrc_woocommerce_proceed_to_checkout() { 
    echo 'bottone checkout';
}; 
         
// add the action 
add_action( 'woocommerce_proceed_to_checkout', 'mrc_woocommerce_proceed_to_checkout', 10, 2 );
