<?php
/**
 * Plugin Name: Sri Lanka Woo Shipping Zones
 * Plugin URI: https://saharachintha.com
 * Author: SaharaChintha (Fair Price)
 * Author URI: https://saharachintha.com
 * Description: Sri Lanka Provinces (25) & Shipping Zones
 * Version: 2.1.2
 * License: GPL v2 or later.
 * License URL: http://saharachintha.com
 * text-domain: prefix-plugin-name
*/
add_filter( 'woocommerce_states', 'techiepress_custom_shipping_zones' );
function techiepress_custom_shipping_zones( $states ) {
    $states['LK'] = array(
        'LK001' => 'Ampara',    
        'LK002' => 'Anuradhapura',    
        'LK003' => 'Badulla',
        'LK004' => 'Batticaloa',    
        'LK005' => 'Colombo',    
        'LK006' => 'Galle',    
        'LK007' => 'Gampaha',    
        'LK008' => 'Hambantota',    
        'LK009' => 'Jaffna',    
        'LK010' => 'Kalutara',    
        'LK011' => 'Kandy',    
        'LK012' => 'Kegalle',    
        'LK013' => 'Kilinochchi',    
        'LK014' => 'Kurunegala',    
        'LK015' => 'Mannar',    
        'LK016' => 'Matale',    
        'LK017' => 'Matara',    
        'LK018' => 'Monaragala',    
        'LK019' => 'Mullaitivu',    
        'LK020' => 'Nuwara Eliya',    
        'LK021' => 'Polonnaruwa',    
        'LK022' => 'Puttalam',    
        'LK023' => 'Ratnapura',    
        'LK024' => 'Trincomalee',    
        'LK025' => 'Vavuniya',    
    );
    return $states ;
}