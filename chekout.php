<?php
/*
Plugin Name: Code Snippet
Description: Make chekout field required
Version: 1.0
Author: Soldan3
*/

// Plugin code will go here

add_filter( 'woocommerce_shipping_fields', 'display_shipping_region_checkout_field', 20, 1 );
function display_shipping_region_checkout_field( $fields ) {
    $fields['shipping_region'] = array(
        'type'        => 'select',
        'label'       => __("Region", "woocommerce") ,
        'class'       => array('form-row-wide', 'update_totals_on_change'),
        'required'    => true,
        'options'       => array(
            ''         => __("Choose a region please"),
            'option-1' => __("Option 01"),
            'option-2' => __("Option 02"),
            'option-3' => __("Option 03"),
        ),
        'priority' => 100, 
        'clear' => true,
    );
    return $fields;
}



