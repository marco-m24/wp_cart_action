function mrc_woocommerce_before_cart() { 
    echo 'messaggio dentro il carrello<br>'; 
}; 
         
// add the action 
add_action( 'woocommerce_before_cart', 'mrc_woocommerce_before_cart', 10, 1 );


function mrc_woocommerce_before_cart_table(  ) { 
    echo 'inizio tabella carrello<br>';
}; 
         
// add the action 
add_action( 'woocommerce_before_cart_table', 'mrc_woocommerce_before_cart_table', 10, 0 );



function mrc_woocommerce_before_cart_contents(  ) { 
    echo 'prima del contenuto del carrello<br>';
}; 
         
// add the action 
add_action( 'woocommerce_before_cart_contents', 'mrc_woocommerce_before_cart_contents', 10, 0 );




function mrc_woocommerce_after_cart_table(  ) { 
   echo 'dopo il contenuto'; 
}; 
         
// add the action 
add_action( 'woocommerce_after_cart_table', 'mrc_woocommerce_after_cart_table', 10, 0 );
