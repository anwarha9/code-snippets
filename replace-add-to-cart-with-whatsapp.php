<?php
/**
 * Replace "Add to Cart" button with a WhatsApp order button for specific products.
 *
 * This snippet replaces the "Add to Cart" button on the WooCommerce shop page
 * with a WhatsApp order button for selected products.
 *
 * @filter woocommerce_loop_add_to_cart_link
 */
add_filter('woocommerce_loop_add_to_cart_link', 'custom_whatsapp_button', 10, 2);

function custom_whatsapp_button($button, $product) {
    // List product IDs for WhatsApp ordering
    $whatsapp_product_ids = array(18643, 10583, 10584, 10585, 10586, 10587, 10588, 10589, 19532, 19533, 19534); 
    
    // Replace the button only for specific products
    if (in_array($product->get_id(), $whatsapp_product_ids)) {
        $whatsapp_number = '123456789'; // Your WhatsApp number
        $encoded_product_name = urlencode($product->get_name());
        $whatsapp_url = "https://wa.me/$whatsapp_number/?text=Hello,%20I%20am%20interested%20in%20ordering%20the%20product:%20$encoded_product_name.";
        
        return '<a href="' . $whatsapp_url . '" class="button whatsapp-order-button" target="_blank">Order on WhatsApp</a>';
    }
    
    return $button;
}
