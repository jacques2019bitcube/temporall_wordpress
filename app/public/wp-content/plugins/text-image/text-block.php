<?php
/**
 * Plugin Name: Text Plugin
 * Author: Carmen Dominguez
 * Version: 1.0.0
 */
  
function imageTextBlock() {
  wp_enqueue_script(
    'image-text-blcok',
    plugin_dir_url(__FILE__) . 'text-block.js',
    array('wp-blocks','wp-editor'),
    true
  );
}
   
add_action('enqueue_block_editor_assets', 'imageTextBlock');