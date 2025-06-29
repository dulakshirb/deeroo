<?php
/**
 * Theme Functions
 * 
 * @package Deeroo
 */

 function deeroo_enqueue_scripts(){
    wp_enqueue_style( 'style-sheet', get_stylesheet_uri(), [], filemtime( get_template_directory() . '/style.css' ), 'all' );
 }

 add_action( "wp_enqueue_scripts", "deeroo_enqueue_scripts" );