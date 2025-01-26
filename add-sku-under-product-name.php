<?php
/**
 * Add SKU under product name on WooCommerce shop page.
 *
 * This function hooks into the WooCommerce product loop and displays
 * the SKU beneath the product name.
 * The SKU is shown only if it exists for the product.
 *
 * @hooked woocommerce_shop_loop_item_title
 */
add_action('woocommerce_shop_loop_item_title', 'add_sku_under_product_name', 15);

function add_sku_under_product_name() {
    global $product;

    // Get the product SKU
    $sku = $product->get_sku();

    // Display the SKU only if it exists
    if ($sku) {
        echo '<p class="product-sku" style="font-size: 14px; color: #555;">מק״ט: ' . esc_html($sku) . '</p>';
    }
}
