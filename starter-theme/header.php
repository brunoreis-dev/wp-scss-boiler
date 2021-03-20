<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package starter_theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <meta name="theme-color" content="#350c5d">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/src/img/favicon.png" />
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Digital Republic | Wordpress Boilerplate</title>

  <meta content="Wordpress Boilerplate description" name="description">
  <meta content="Wordpress Boilerplate author" name="author">
  <meta content="website" property="og:type">
  <meta content="Wordpress Boilerplate title" property="og:title">
  <meta content="Wordpress Boilerplate description" property="og:description">
  <meta content="<?php echo get_template_directory_uri(); ?>/src/img/og.png" property="og:image" />
  <meta content="NockPar | Investimos na geração que está mudando o futuro do mundo" property="og:site_name">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <main>
    <?php include_component('header', array('title' => 'Header Title', 'text' => 'Header Text')); ?>
