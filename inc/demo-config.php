<?php
/**
 * Functions for configuring demo importer.
 *
 * @author   ThemeGrill
 * @category Admin
 * @package  Importer/Functions
 * @version  1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Setup demo importer packages.
 *
 * @param  array $packages
 *
 * @return array
 */
function explore_demo_importer_packages( $packages ) {
	$new_packages = array(
		'explore-free' => array(
			'name'    => esc_html__( 'Explore', 'explore' ),
			'preview' => 'http://demo.themegrill.com/explore/',
		),
	);

	return array_merge( $new_packages, $packages );
}

add_filter( 'themegrill_demo_importer_packages', 'explore_demo_importer_packages' );
