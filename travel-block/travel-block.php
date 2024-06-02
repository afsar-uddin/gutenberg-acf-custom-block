<?php 

/**
 * Plugin Name: Travel Block
 * Plugin URI: https:/itclanbd.com 
 * Author: ITclan BD
 * Author URI: https:/itclanbd.com 
 * Version: 0.1.0
 * License: GPL2
 * text-domain: travel-block
 */

 defined('ABSPATH') or die('No autorized access!');

 add_action('acf/init', 'ic_travel_block');
 add_action('acf/init', 'ic_repeater_block');

 function ic_travel_block() {
    if(function_exists('ic_travel_block')) {
        acf_register_block_type(array(
            'name' => 'ictravelblock',
            'title' => __('IC Travel Block'),
            'description' => __('IC Travel Block for test purpose'),
            // 'render_callback' => function() {
            //     echo "<h3>Test IC Travel block</h3>";
            // },
            'render_template' => plugin_dir_path( __FILE__ ) . 'template-parts/travel-block.php',
            'category' => 'media',
            'icon' => 'format-gallery',
            'keywords' => array('ICTravel', 'IC'),
            'enqueue_assets' => function() {
                wp_enqueue_style('ic-travel-block-style', plugin_dir_url(__FILE__) . 'assets/css/style.css', [], time(), 'all');
            },
        ));
    }
 }

 function ic_repeater_block() {
    if(function_exists('ic_repeater_block')) {
        acf_register_block_type(array(
            'name' => 'icrepeater',
            'title' => __('IC Repeater Block'),
            'description' => __('IC repeater Block for practice purpose'),
            // 'render_callback' => function() {
            //     echo "<h3>Repeater block</h3>";
            // },
            'render_template' => plugin_dir_path( __FILE__ ) . 'template-parts/repeater-block.php',
            'category' => 'text',
            'icon' => 'format-gallery',
            'keywords' => array('ICRepeater', 'IC'),
            // 'enqueue_assets' => function() {
            //     wp_enqueue_style('ic-travel-block-style', plugin_dir_url(__FILE__) . 'assets/css/style.css', [], time(), 'all');
            // },
        ));
    }
 }