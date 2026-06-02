<?php

function rbk_theme_setup()
{
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('site-icon');
}
add_action('after_setup_theme', 'rbk_theme_setup');

function rbk_theme_scripts()
{
  wp_enqueue_style('rbk-style', get_stylesheet_uri());
  wp_enqueue_style('rbk-main', get_template_directory_uri() . '/assets/css/blog.css');
  if (is_404()) {
    wp_enqueue_style('rbk-404', get_template_directory_uri() . '/assets/css/404.css');
  }
  wp_enqueue_script('rbk-header', get_template_directory_uri() . '/assets/js/header.js', [], '1.0.0', true);
  wp_enqueue_script('rbk-cookies', get_template_directory_uri() . '/assets/js/cookies.js', [], '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'rbk_theme_scripts');

add_filter('excerpt_length', function () {
  return 20;
});

function reading_time()
{
  $content = get_post_field('post_content', get_the_ID());
  $word_count = str_word_count(strip_tags($content));
  $minutes = ceil($word_count / 200);

  if ($minutes === 1) {
    $label = '1 minuta czytania';
  } elseif ($minutes >= 2 && $minutes <= 4) {
    $label = $minutes . ' minuty czytania';
  } else {
    $label = $minutes . ' minut czytania';
  }

  return $label;
}

function rbk_pagination()
{
  echo '<div class="pagination">';
  echo paginate_links([
    'prev_text' => '',
    'next_text' => '',
    'mid_size'  => 999,
    'end_size'  => 0,
  ]);
  echo '</div>';
}