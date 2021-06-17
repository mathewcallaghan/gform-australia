<?php
/**
 * @link              https://github.com/mathewcallaghan/gform-australia
 * @since             1.0.0
 * @package           Gform_Australia
 *
 * @wordpress-plugin
 * Plugin Name:       Gform Australia
 * Plugin URI:        https://github.com/mathewcallaghan/gform-australia
 * Description:       This plugin adds an Australian address type.
 * Version:           1.0.1
 * Author:            Mathew Callaghan
 * Author URI:        https://mathew.callaghan.xyz/
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 * Text Domain:       gform-australia
 * Domain Path:       /languages
 */


if ( ! defined( 'WPINC' ) ) {
	die;
}

function australian_address_type( $address_types ) {

    $address_types['australia'] = array(
        'label'       => 'Australia',
        'country'     => 'Australia',
        'zip_label'   => 'Postcode',
        'state_label' => 'State',
        'states'      => array(
            'ACT' => 'Australian Capital Territory',
            'NSW' => 'New South Wales',
            'NT'  => 'Northern Territory',
            'QLD' => 'Queensland',
            'SA'  => 'South Australia',
            'TAS' => 'Tasmania',
            'VIC' => 'Victoria',
            'WA'  => 'Western Australia',
        )
    );
 
    return $address_types;
}

add_filter( 'gform_address_types', 'australian_address_type' );
