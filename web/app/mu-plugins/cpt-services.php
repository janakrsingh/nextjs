<?php
/**
 * Plugin Name: CPT Services
 */

add_action('init', function () {

  register_post_type('services', [
    'label' => 'Services',
    'public' => true,
    'show_in_rest' => true,
    'supports' => ['title','editor','thumbnail'],
    'rewrite' => ['slug' => 'services']
  ]);

  register_post_type('insights', [
    'label' => 'Insights',
    'public' => true,
    'show_in_rest' => true,
    'supports' => ['title','editor','thumbnail'],
    'rewrite' => ['slug' => 'insights']
  ]);

});
