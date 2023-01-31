<?php
/*
Plugin Name: Post Meta Data
Description: Prints the current post's meta data.
Version: 1.0
Author: Machai Bulawayo
*/

function post_meta_data_display() {
  global $post;
  $meta = get_post_meta($post->ID);
  echo '<ul>';
  foreach ($meta as $key => $value) {
    echo '<li><strong>' . $key . ':</strong> ' . $value[0] . '</li>';
  }
  echo '</ul>';
}

add_action( 'the_content', 'post_meta_data_display' );
