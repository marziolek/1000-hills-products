<?php
/*
 * Template Name: About us
 * Description: A Page Template with a darker design.
 */

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

if (!($post->carousel_shortcode || $post->hero_video)) {
  $context['no_hero'] = 'no-hero';
};

$context['title'] = $post->post_title;
if ($post->hero_title) {
  $context['title'] = $post->hero_title;
};
if ($post->hero_subtitle) {
  $context['subtitle'] = $post->hero_subtitle;
};
if ($post->contact_form) {
  $context['contact_form'] = $post->contact_form;
};

$context['template'] = get_page_template_slug($post->ID);
$context['body_class'] .= ' page-' . $post->post_name;

Timber::render( array( 'page-about-us.twig' ), $context );
