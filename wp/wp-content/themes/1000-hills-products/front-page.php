<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * To generate specific templates for your pages you can use:
 * /mytheme/views/page-mypage.twig
 * (which will still route through this PHP file)
 * OR
 * /mytheme/page-mypage.php
 * (in which case you'll want to duplicate this file and save to the above path)
 *
 * @package  WordPress
 * @subpackage  X5
 */

$context = Timber::get_context();

// Set a home page variable
$context['is_front_page'] = 'true';
$context['africa_map'] = file_get_contents(get_template_directory_uri() . '/dist/assets/images/africa-map.svg');

$context['title'] = $post->post_title;
if ($post->hero_title) {
  $context['title'] = $post->hero_title;
};
if ($post->hero_subtitle) {
  $context['subtitle'] = $post->hero_subtitle;
};
if ($post->video_youtube_id) {
  $context['video_youtube_id'] = $post->video_youtube_id;
};

$context['recognitions'] = new TimberPost(24);

Timber::render(array('page-home.twig'), $context);
