<?php

/**
 * @file
 * Template overrides as well as (pre-)process and alter hooks for the
 * Unsemantic theme.
 */

global $base_path;
$vars['base_path'] = $base_path;

// JS
$html5js = array(
  '#tag' => 'script',
  '#attributes' => array( // Set up an array of attributes inside the tag
    'src' => $base_path . drupal_get_path('theme', 'unsemantic_theme') . '/unsemantic-master/assets/javascripts/html5.js', 
  ),
  '#prefix' => '<!--[if lt IE 9]>',
  '#suffix' => '</script><![endif]-->',
);
drupal_add_html_head($html5js, 'html5js');


// CSS
$responsive = array(
  '#tag' => 'link',
  '#attributes' => array( // Set up an array of attributes inside the tag
    'href' => $base_path . drupal_get_path('theme', 'unsemantic_theme') . '/unsemantic-master/assets/stylesheets/unsemantic-grid-responsive.css', 
    'rel' => 'stylesheet',
    'type' => 'text/css',
  ),
  '#prefix' => '<!--[if (gt IE 8) | (IEMobile)]><!-->',
  '#suffix' => '<![endif]-->',
);
drupal_add_html_head($responsive, 'responsive');

$ie = array(
  '#tag' => 'link',
  '#attributes' => array( // Set up an array of attributes inside the tag
    'href' => $base_path . drupal_get_path('theme', 'unsemantic_theme') . '/unsemantic-master/assets/stylesheets/ie.css', 
    'rel' => 'stylesheet',
    'type' => 'text/css',
  ),
  '#prefix' => '<!--[if (lt IE 9) & (!IEMobile)]',
  '#suffix' => '<![endif]-->',
);
drupal_add_html_head($ie, 'ie');
