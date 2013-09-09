<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width" />
  <title><?php wp_title( '|', true, 'right' ); ?><?=esc_attr(get_bloginfo('name'))?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
  <!--[if lt IE 9]>
  <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
  <![endif]-->
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<a class="accessibility" href="#content" title="본문으로 바로 가기">본문으로 바로 가기</a>
<div class="wrapper">
  <div class="header">
    <div class="top-blank"></div>
    <div class="header__row1 cf">
      <div class="site-name">
        <a href="<?=home_url()?>"><?bloginfo( 'name' ); ?></a>
      </div>
      <div class="others-wrapper cf">
        <ul class="others nav">
          <li>
            <a href="<?php bloginfo('rss_url')?>" title="RSS">
              <img src="<?php echo get_template_directory_uri()?>/images/icon-rss.svg" alt="RSS">
            </a>
            <a href="<?php echo home_url('%ec%9d%b4%eb%a9%94%ec%9d%bc%eb%a1%9c-%ea%b5%ac%eb%8f%85%ed%95%98%ea%b8%b0')?>">
              <img src="<?php echo get_template_directory_uri()?>/images/icon-newsletter.svg" alt="Newsletter">
            </a>
            <a href="https://twitter.com/mytory" title="Twitter">
              <img src="<?php echo get_template_directory_uri()?>/images/icon-twitter.svg" alt="Twitter">
            </a>
            <a href="https://facebook.com/mytorydev" title="Facebook Page">
              <img src="<?php echo get_template_directory_uri()?>/images/icon-facebook.svg" alt="Facebook Page">
            </a>
            <a href="https://plus.google.com/112373772451309371763" title="Google+ Page">
              <img src="<?php echo get_template_directory_uri()?>/images/icon-g+.svg" alt="Google+ Page">
            </a>
            <a href="https://github.com/mytory" title="GitHub">
              <img src="<?php echo get_template_directory_uri()?>/images/icon-github.svg" alt="GitHub">
            </a>
          </li>
        </ul>
      </div>
      <div class="search-box">
        <form action="<?=home_url()?>">
          <input type="search" name="s" value="<?=isset($_GET['s']) ? $_GET['s'] : ''?>">
          <input class="btn btn--small" type="submit" value="검색">
        </form>
      </div>
    </div>
    <?php 
    $opt = array(
      'theme_location' => 'main-nav', 
      'menu_class' => 'nav nav--fit nav--block nav--banner main-nav',
      'walker' => new MBT_Walker_Nav_Menu,
    );
    ?>
    <div class="main-nav-wrapper">
    <?php
    wp_nav_menu($opt); 
    ?>
    </div>
  </div>