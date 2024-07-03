<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="format-detection" content="telephone=no">

  <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <link rel="canonical" href="<?php global $wp; echo home_url(add_query_arg(array(), $wp->request)); ?>">
  <meta property="og:locale" content="ja_JP">
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?php bloginfo('name'); ?>">
  <meta property="og:description" content="<?php bloginfo('description'); ?>">
  <meta property="og:url" content="<?php global $wp; echo home_url(add_query_arg(array(), $wp->request)); ?>">
  <meta property="og:site_name" content="<?php bloginfo('name'); ?>">
  <meta property="og:image" content="<?php echo THEME_URL ?>/assets/img/common/ogp.png" />
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:image:type" content="image/png">
  <meta name="twitter:card" content="summary_large_image">

  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

  <div id="wrapper">

    <header id="header" class="l-header">
      <div class="l-header_inner">
        <div class="l-header_logo"><a href="<?php echo home_url() ?>">
          <img src="<?php echo THEME_URL ?>/assets/img/logo.png" loading="lazy" alt="クオリティ・ワン株式会社" width="624" height="110">
        </a></div>
        <div class="l-header_btn is-pc"><a href="<?php echo home_url() ?>/recruit">ENTRY</a></div>
        <div class="l-header_hamburger">
          <span></span>
        </div>
      </div>

      <div class="l-header_overlay"></div>

      <nav class="l-header_nav">
        <div class="nav-content">
          <div class="nav-image">
            <picture>
              <source media="(min-width:769px)" srcset="<?php echo THEME_URL ?>/assets/img/img_nav_01.png">
              <img src="<?php echo THEME_URL ?>/assets/img/img_nav_01_sp.png" loading="lazy" alt="">
            </picture>
          </div>
          <div class="nav-icon icon01 is-pc"><img src="<?php echo THEME_URL ?>/assets/img/icon_nav_01.png" loading="lazy" alt="" width="232" height="186"></div>
          <div class="nav-icon icon02 is-pc"><img src="<?php echo THEME_URL ?>/assets/img/icon_nav_02.png" loading="lazy" alt="" width="176" height="170"></div>
          <div class="nav-bg"></div>
          <div class="nav-inner">
            <ul class="nav-menu">
              <li><a href="<?php echo home_url() ?>/company"><span>COMPANY</span>会社概要</a></li>
              <li><a href="<?php echo home_url() ?>/business"><span>BUSINESS</span>仕事内容</a></li>
              <li><a href="<?php echo home_url() ?>/interview"><span>INTERVIEW</span>社員紹介</a></li>
              <li><a href="<?php echo home_url() ?>/culture"><span>CULTURE</span>働く環境</a></li>
              <li><a href="<?php echo home_url() ?>/program"><span>PROGRAM</span>研修制度</a></li>
              <li><a href="<?php echo home_url() ?>/recruit"><span>RECURUITMENT</span>採用情報</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- /header -->
