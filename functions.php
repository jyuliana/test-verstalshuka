<?php
/**
 * test-verstalshuka engine room
 *
 * @package test-verstalshuka
 */
/**
 * Assign the test-verstalshuka version to a var
 */
$theme              = wp_get_theme( 'test-verstalshuka' );
$magazin_version = $theme['Version'];

function extra_setup() {
register_nav_menu ('primary mobile', __( 'Navigation Mobile', 'twentythirteen' ));
}
add_action( 'after_setup_theme', 'extra_setup' );